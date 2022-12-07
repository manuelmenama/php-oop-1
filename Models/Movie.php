<?php

  class Movie{
    public $title;
    public $duration;
    public $year;
    public $direction;
    public $genre = [];
    public $poster;

    /**
     * @param String qui il titolo
     * @param String qui la lunghezza in minuti
     * @param String qui l'anno (yyyy)
     * @param String qui il regista
     * @param Array qui i generi
     */
    public function __construct($_title, $_duration, $_year, $_direction, $_genre)
    { 
      $this->title = $_title;
      $this->duration = $_duration;
      $this->year = $_year;
      $this->direction = $_direction;
      $this->genre = $_genre;
    }

    public function takePoster($_poster) {
      $this->poster = $_poster;
    }
  }