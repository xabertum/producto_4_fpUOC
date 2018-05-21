<?php

class Noticia {

    // Variables internas

    private $id_noticia;
    private $autor;
    private $editor;
    private $titulo;
    private $subtitulo;
    private $texto;
    private $texto_2;
    private $imagen;
    
    /*
    private $fecha_creacion;
    private $fecha_modificacion;
    private $fecha_publicacion;
    */
    
    //Getters & Setters
          
    /**
     * @return mixed
     */
    public function getId_noticia ()
    {
        return $this->id_noticia;
    }

    /**
     * @return mixed
     */
    public function getAutor ()
    {
        return $this->autor;
    }

    /**
     * @return mixed
     */
    public function getEditor ()
    {
        return $this->editor;
    }

    /**
     * @return mixed
     */
    public function getTitulo ()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getSubtitulo ()
    {
        return $this->subtitulo;
    }

    /**
     * @return mixed
     */
    public function getTexto ()
    {
        return $this->texto;
    }

    /**
     * @return mixed
     */
    public function getImagen ()
    {
        return $this->imagen;
    }

    /**
     * @return mixed
     */
    public function getFecha_creacion ()
    {
        return $this->fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getFecha_modificacion ()
    {
        return $this->fecha_modificacion;
    }

    /**
     * @return mixed
     */
    public function getFecha_publicacion ()
    {
        return $this->fecha_publicacion;
    }

    /**
     * @param mixed $id_noticia
     */
    public function setId_noticia ($id_noticia)
    {
        $this->id_noticia = $id_noticia;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor ($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor ($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo ($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @param mixed $subtitulo
     */
    public function setSubtitulo ($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto ($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen ($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFecha_creacion ($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * @param mixed $fecha_modificacion
     */
    public function setFecha_modificacion ($fecha_modificacion)
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    /**
     * @param mixed $fecha_publicacion
     */
    public function setFecha_publicacion ($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    /**
     * Get the value of texto_2
     */ 
    public function getTexto_2()
    {
        return $this->texto_2;
    }

    /**
     * Set the value of texto_2
     *
     * @return  self
     */ 
    public function setTexto_2($texto_2)
    {
        $this->texto_2 = $texto_2;

        return $this;
    }
}