<?php


namespace App\Controller;


use Doctrine\ORM\EntityManager;
use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ImobiliariaController extends AbstractController
{
    /**
     * @Route("index", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = new Usuario();
        $usuario->setCpfCnpj('03208260407');
        $usuario->setNome('Hélio Cardoso Rodrigues de Souza');
        $usuario->setDtCadastro(new \DateTime());
        $usuario->setDtNascimento(new \DateTime());

        $em->persist($usuario);
        $em->flush();

        return $this->render('index.html.twig');
    }

}