<?php

include '../datos/noticiaDAO.php';

class NoticiaControlador
{

    public static function guardarNoticia($id_news, $autor, $editor, $titulo, $subTitulo,
        $texto, $texto_2) {

        $obj_noticia = new Noticia();
        $obj_noticia->setId_noticia($id_news);
        $obj_noticia->setAutor($autor);
        $obj_noticia->setEditor($editor);
        $obj_noticia->setTitulo($titulo);
        $obj_noticia->setSubtitulo($subTitulo);
        $obj_noticia->setTexto($texto);
        $obj_noticia->setTexto_2($texto_2);
               

        return NoticiaDAO::guardarNoticia($obj_noticia);

    }

}
