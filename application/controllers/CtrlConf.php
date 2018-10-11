<?php

class CtrlConf extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('AfficherConf');
    }
    
    function AfficherFormations()
    {
        $idActivite = $_GET['idActivite'];
        $this->load->model('Model_Formations');
        $data['lesFormations'] = $this->Model_Formations->getFormationsByActivite($idActivite);
        $this->load->view('AfficherFormations', $data);
    }
    
    function AfficherAgents()
    {
        $idFormation = $_GET['idFormation'];
        $this->load->model('Model_Agents');
        $data['lesAgents'] = $this->Model_Agents->getAgentsByFormation($idFormation);
        $this->load->view('AfficherAgents', $data);
    }
    function ValiderPresence()
    {
        $this->load->model('Model_Inscription');
        $this->Model_Inscription->ValiderPresence($_GET['tab1'],$_GET['tab2'],$_GET['numF']);
    }
}

