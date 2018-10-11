<?php
function getIdConf()
{
    $sql = $this->db->query("select idConference from conference");
    return $sql->result();
}
function getNiveau()
{
    $sql = $this->db->query("niveau from niveau");
    return $sql->result(); 
}
function InsererConference($tabId,)
{
    $tabCode = explode(',',$tabId);
    $tabPresence = explode(',',$tab);
    for($i = 0 ; $i < count($tabCode); $i++)
    {           
         $sql = $this->db->query("update inscription set presence =".$tabPresence[$i]." where codeAgent='".$tabCode[$i]."' and numeroFormation='".$num."'");
    }
}
?>
