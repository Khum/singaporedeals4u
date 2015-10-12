<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;


if (!empty($_POST)) {
   
    $uname = $_SESSION['Auth_name'];
    $sid = $_POST['sid'];
    $total_final= preg_replace('/\s+/', '', $_POST["total_final"]);
    $data = explode('_',$sid);
    $sid = $data['0'];
    $sname = $data['1'];
    $sprice = $data['2'];
    $del = $_POST['action'];
    $pid = $_POST['pid'];
    
    $_SESSION[$uname][$pid]['date'] = $_POST['dte'];
    $_SESSION[$uname][$pid]['time'] = $_POST['tme'];
    
        if($sid == 23)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['guide'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['guide']);
                $total_final -= $sprice;
            }
            else
            {
                $_SESSION[$uname][$pid]['guide'] = array("name"=>$sname, 'price'=>$sprice);
                $total_final += $sprice;
                $_SESSION[$uname][$pid]['html']['guide'] = "<tr>
                            <td>
                                ".$sname."
                            </td>
                            <td class='text-right'>
                                ".$sprice."
                            </td>
                        </tr>";
            }
        }
        
        if($sid == 24)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['pickup'] = array("name"=>'', 'price'=>'');
                unset($_SESSION[$uname][$pid]['html']['pickup']);
                $total_final -= $sprice;
            }
            else{
            $_SESSION[$uname][$pid]['pickup'] = array("name"=>$sname, 'price'=>$sprice);
            $total_final += $sprice;
            $_SESSION[$uname][$pid]['html']['pickup'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        if($sid == 25)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['insurance'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['insurance']);
                $total_final -= $sprice;
            }
            else
            {
                $_SESSION[$uname][$pid]['insurance'] = array("name"=>$sname, 'price'=>$sprice);
                $total_final += $sprice;
                $_SESSION[$uname][$pid]['html']['insurance'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        if($sid == 26)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['coffee'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['coffee']);
                $total_final -= $sprice;
            }
            else
            {
            $_SESSION[$uname][$pid]['coffee'] = array("name"=>$sname, 'price'=>$sprice);
            $total_final += $sprice;
            $_SESSION[$uname][$pid]['html']['coffee'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        if($sid == 27)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['welcome'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['welcome']);
                $total_final -= $sprice;
            }
            else
            {
            $_SESSION[$uname][$pid]['welcome'] = array("name"=>$sname, 'price'=>$sprice);
            $total_final += $sprice;
            $_SESSION[$uname][$pid]['html']['welcome'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        if($sid == 28)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['dinner'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['dinner']);
                $total_final -= $sprice;
                
            }
            else
            {
                $_SESSION[$uname][$pid]['dinner'] = array("name"=>$sname, 'price'=>$sprice);
                $total_final += $sprice;
                $_SESSION[$uname][$pid]['html']['dinner'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        if($sid == 29)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['bike'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['guide']= "";
                unset($_SESSION[$uname][$pid]['html']['bike']);
                $total_final -= $sprice;
            }
            else
            {
                $_SESSION[$uname][$pid]['bike'] = array("name"=>$sname, 'price'=>$sprice);
                $total_final += $sprice;
                $_SESSION[$uname][$pid]['html']['bike'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        
        if($sid == 30)
        {
            if($del=='delete')
            {
                $_SESSION[$uname][$pid]['2way'] = array("name"=>'', 'price'=>'');
                //$_SESSION[$uname][$pid]['html']['2way']= "";
                unset($_SESSION[$uname][$pid]['html']['2way']);
                $total_final -= $sprice;
            }
            else
            {
                $_SESSION[$uname][$pid]['2way'] = array("name"=>$sname, 'price'=>$sprice);
                $total_final += $sprice;
                $_SESSION[$uname][$pid]['html']['2way'] = "<tr>
                        <td>
                            ".$sname."
                        </td>
                        <td class='text-right'>
                            ".$sprice."
                        </td>
                    </tr>";
            }
        }
        
        $grand = '<tr class="total">
            <td>
                Total cost
            </td>
            <td id="grand2" class="text-right">
                 '.$total_final.'
            </td>
        </tr>';    
        
        $others_services = $_SESSION[$uname][$pid]['guide']['price'] + $_SESSION[$uname][$pid]['pickup']['price'] +
             $_SESSION[$uname][$pid]['insurance']['price'] + $_SESSION[$uname][$pid]['coffee']['price'] +
             $_SESSION[$uname][$pid]['welcome']['price'] + $_SESSION[$uname][$pid]['dinner']['price'] +
             $_SESSION[$uname][$pid]['bike']['price'] + $_SESSION[$uname][$pid]['2way']['price'];
             
        $html =  $_SESSION[$uname][$pid]['html']['guide']. $_SESSION[$uname][$pid]['html']['pickup']
                . $_SESSION[$uname][$pid]['html']['insurance']. $_SESSION[$uname][$pid]['html']['coffee']
                . $_SESSION[$uname][$pid]['html']['welcome']. $_SESSION[$uname][$pid]['html']['dinner']
                 .$_SESSION[$uname][$pid]['html']['bike'].$_SESSION[$uname][$pid]['html']['2way'].$grand; 
                 
        $array = array("total" => $total_final, "service" => $html,'others'=>$others_services);
        $_SESSION[$uname][$pid]['single_total'] = $total_final;
        echo json_encode($array);
        exit;
    }
?>