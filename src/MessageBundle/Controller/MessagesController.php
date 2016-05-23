<?php

namespace MessageBundle\Controller;

use EntityBundle\Entity\Messages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessagesController extends Controller
{
    public function indexAction()
    {
    }

    public function sendAction(Request $message)
    {
        $destinataire = $message->get('destinataire');
        if (empty($destinataire))
            return new Response(json_encode(Array('Erreur' => 'Destinataire')));

        $body = $message->get('body');
        if (empty($body))
            return new Response(json_encode(Array('Erreur' => 'Body')));

        $user1 = $this->container->get('security.context')->getToken()->getUser()->getId();

        $user2 = $this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('username' => $destinataire));
        $erreur = false;

        if (empty($user2)) {
            $erreur = true;
        } else {
            $user2 = $user2[0]->getId();
        }

        if ($erreur == true)
            return new Response(json_encode(Array('Erreur' => 'Personne')));


        $new = new Messages();

        if ($user2 == $user1)
            return new Response(json_encode(Array('Erreur' => 'Self')));

        if ($user2 < $user1) {
            $temp = $user2;
            $user2 = $user1;
            $user1 = $temp;
        }

        $new->setIdUser1($user1);
        $new->setIdUser2($user2);
        $new->setBody($body);
        $new->setDate(new \DateTime(date('Y-m-d H:i:s')));
        $new->setwritter($this->container->get('security.context')->getToken()->getUser()->getUsername());
        $new->setgetter($destinataire);

        $em = $this->getDoctrine()->getManager();
        $em->persist($new);
        $em->flush();

        $json = json_encode(Array("day" => $new->getDate()->format('Y-m-d'),
            "hour" => $new->getDate()->format('H:i:s'),
            "user1" => $new->getIdUser1(),
            "user2" => $new->getIdUser2(),
            "body" => $new->getBody(),
            "id" => $new->getId(),
            "writter" => $new->getwritter(),
            "getter" => $new->getgetter()
        ));

        return new Response($json);
    }

    public function getAction()
    {
        //recuperation des messages avec iduser1 == id connecté
        $messages = $this
            ->getDoctrine()
            ->getRepository('EntityBundle:Messages')
            ->findBy(array('idUser1' => $this->container
                ->get('security.context')
                ->getToken()
                ->getUser()
                ->getId()
            ));

        //recuperation des messages avec iduser2 == id connecté
        $messages2 = $this
            ->getDoctrine()
            ->getRepository('EntityBundle:Messages')
            ->findBy(array('idUser2' => $this->container
                ->get('security.context')
                ->getToken()
                ->getUser()
                ->getId()
            ));

        //stock les differentes ids liées au messages
        $tab = [];

        for ($i = 0; $i < count($messages); $i++) {
            if (!in_array($messages[$i]->getIdUser2(), $tab)) {
                array_push($tab, $messages[$i]->getIdUser2());
            }
        }

        for ($i = 0; $i < count($messages2); $i++) {
            if (!in_array($messages2[$i]->getIdUser1(), $tab)) {
                array_push($tab, $messages2[$i]->getIdUser1());
            }
        }

        //stock des messages dans un tableau avec des chaines de caracteres a des clés differentes
        $AllMessages = [];
        $check = 0;
        for ($j = 0; $j < count($tab); $j++) {
            if ($tab[$j] < $this->container->get('security.context')->getToken()->getUser()->getId()) {
                for ($p = 0; $p < count($messages2); $p++) {
                    if ($p == 0)
                        $check = 0;
                    if ($messages2[$p]->getIdUser1() == $this->getUser()->getId() && $p > 0 && $messages2[$p]->getIdUser2() < $messages2[$p - 1]->getIdUser2()) {
                        $check = 0;
                    }
                    if ($tab[$j] == $messages2[$p]->getIdUser1())
                        $AllMessages[$tab[$j]][$p] = $messages2[$p]->getwritter()
                            . '|||' .
                            $messages2[$p]->getBody()
                            . '|||' .
                            $messages2[$p]->getDate()->format('d/m/Y h:m:s')
                            . '|||' .
                            $messages2[$p]->getIdUser1() . '_' . $messages2[$p]->getIdUser2()
                            . '|||' .
                            $messages2[$p]->getgetter()
                            . '|||' .
                            $messages[$p]->getId();
                    $check++;
                }
            } else {
                for ($q = 0; $q < count($messages); $q++) {
                    if ($q == 0)
                        $check = 0;
                    if ($messages[$q]->getIdUser1() == $this->getUser()->getId() && $q > 0 && $messages[$q]->getIdUser2() < $messages[$q - 1]->getIdUser2()) {
                        $check = 0;
                    }
                    if ($tab[$j] == $messages[$q]->getIdUser2())
                        $AllMessages[$tab[$j]][$check] = $messages[$q]->getwritter()
                            . '|||' .
                            $messages[$q]->getBody()
                            . '|||' .
                            $messages[$q]->getDate()->format('Y/m/d h:m:s')
                            . '|||' .
                            $messages[$q]->getIdUser1() . '_' . $messages[$q]->getIdUser2()
                            . '|||' .
                            $messages[$q]->getgetter()
                            . '|||' .
                            $messages[$q]->getId();
                    $check++;
                }
            }
        }

        //renvoi d'un code html
        $allUserConv = [];
        $tabAll = [];
        $incre = 0;
        $userConv = '';
        $imageUser = [];


        foreach ($AllMessages as $user) {
            $stringTemp = explode('|||', reset($user));
            $tabAll[$incre] = '<ul class="conv_' . $stringTemp[3] . '">';
            if ($stringTemp[0] == $this->getUser()->getUsername()) {
                $tabAll[$incre] .= '<img src="/images/profile/'.$this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('username' => $stringTemp[4]))[0]->getimageName().'">';
                $tabAll[$incre] .= $stringTemp[4];
                $allUserConv[$incre] = $stringTemp[4];
            } else {
                $tabAll[$incre] .= '<img src="/images/profile/'.$this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('username' => $stringTemp[0]))[0]->getimageName().'">';
                $tabAll[$incre] .= $stringTemp[0];
                $allUserConv[$incre] = $stringTemp[0];
            }
            foreach ($user as $message) {
                $message_explode = explode('|||', $message);
                $tabAll[$incre] .= '<li id="' . $message_explode[5] . '">';
                for ($z = 0; $z < count($message_explode); $z++) {
                    if ($z == 0) {
                        $user = $this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('id' => $message_explode[$z]));
                        $tabAll[$incre] .= '<ul><img src="/images/profile/'.$this->getDoctrine()->getRepository('UserBundle:User')->findBy(array('username' => $message_explode[$z]))[0]->getimageName().'"> <li>' . $message_explode[$z] . '</li>';
                    } else if ($z == 1) {
                        $tabAll[$incre] .= '<li>' . $message_explode[$z] . '</li>';
                    } else if ($z == 2) {
                        $tabAll[$incre] .= '<li>' . $message_explode[$z];
                        if ($message_explode[0] == $this->getUser()->getUsername())
                            $tabAll[$incre] .= '<form method="post" class="delete"><input type="hidden" value="' . $message_explode[5] . '" name="id"><input type="submit" value="X" name="delete"></form>';
                        $tabAll[$incre] .= '</li></ul>';
                    } else {
                        //nothing
                    }
                }
                $tabAll[$incre] .= '</li>';
            }

            $tabAll[$incre] .= '</ul>' .
                '<form class="send"><input type="hidden" name="destinataire" value="' . $allUserConv[$incre] . '"><br>' .
                '<input type="text" name="body" placeholder="body"><br>' .
                '<input type="submit" value="send" name="send">' .
                '</form >';
            $incre++;
        }

        return new Response(json_encode(Array('allConv' => $tabAll, 'user' => $allUserConv)));
    }

    public function deleteAction(Request $message)
    {
        $em = $this->getDoctrine()->getManager();

        $message_delete = $em->getRepository('EntityBundle:Messages')->find($message->get('id'));

        if ($this->getUser()->getUsername() != $message_delete->getwritter())
            return new Response('Not 4 U');

        $em->remove($message_delete);

        $em->flush();

        return new Response($message->get('id'));
    }
}
