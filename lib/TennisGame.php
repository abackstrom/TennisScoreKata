<?php
/**
 * Created by IntelliJ IDEA.
 * User: shardisty
 * Date: May 25, 2010
 * Time: 11:04:02 AM
 * To change this template use File | Settings | File Templates.
 */

class TennisGame {
    public $score_array = array(
        # index => array(scores, adjustmentsIfPlayer1Scores, adjustmentsIfPlayer2Scores)
        "00" => array(array(0, 0), array(1, 0), array(0, 1)),
        "01" => array(array(0, 15), array(1, 0), array(0, 1)),
        "02" => array(array(0, 30), array(1, 0), array(0, 1)),
        "03" => array(array(0, 40), array(1, 0), array(0, 1)),
        "04" => array(array(0, 'X')),
        "10" => array(array(15, 0), array(1, 0), array(0, 1)),
        "11" => array(array(15, 15), array(1, 0), array(0, 1)),
        "20" => array(array(30, 0), array(1, 0), array(0, 1)),
        "21" => array(array(30, 15), array(1, 0), array(0, 1)),
        "22" => array(array(30, 30), array(1, 0), array(0, 1)),
        "30" => array(array(40, 0), array(1, 0), array(0, 1)),
        "32" => array(array(40, 30), array(1, 0), array(0, 1)),
        "33" => array(array('Deuce', 'Deuce'), array(1, 0), array(0, 1)),
        "34" => array(array(40, 'Adv'), array(0, -1), array(0, 1)),
        "35" => array(array(40, 'X')),
        "40" => array(array('X', 0)),
        "43" => array(array('Adv', 40), array(1, 0), array(-1, 0)),
        "53" => array(array('X', '40')),
    );

    private $player_1 = 0;
    private $player_2 = 0;

    public function score() {
        return $this->score_array[$this->player_1 . $this->player_2][0];
    }

    public function player1Scores() {
        $score_record = $this->score_array[$this->player_1 . $this->player_2];
        $this->player_1 += $score_record[1][0];
        $this->player_2 += $score_record[1][1];
    }

    public function player2Scores() {
        $score_record = $this->score_array[$this->player_1 . $this->player_2];
        $this->player_1 += $score_record[2][0];
        $this->player_2 += $score_record[2][1];
    }
}
