<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Captcha extends CI_Model
{
 
    private $tabla_captcha = 'captcha';
 
    function __construct()
    {
        parent::__construct();
    }
 
    function insertCaptcha($data)
    {
        $query = $this->db->insert_string($this->tabla_captcha, $data);
        $this->db->query($query);
    }
 
    function deleteCaptcha($expiration)
    {
        $this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
    }
 
    function captchaExist($binds)
    {
        $sql = "SELECT COUNT(*) AS count FROM ".$this->tabla_captcha." WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
 
        if ($row->count == 0)
            return FALSE;
        else
            return TRUE;
    }
}