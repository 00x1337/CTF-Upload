<?php 

$is_upload = false;
$msg = null;
        // $deny_ext = array("php","php5","php4","php3","php2","html","htm","phtml","pht","jsp","jspa","jspx","jsw","jsv","jspf","jtml","asp","aspx","asa","asax","ascx","ashx","asmx","cer","swf","htaccess");
        $deny_ext = array(
            "png","jpg"
        );
        // /*
        // $file_name = trim($_POST['save_name']);
        // $file_name = deldot($file_name);//删除文件名末尾的点
        // $file_ext = pathinfo($file_name,PATHINFO_EXTENSION);
        // $file_ext = strtolower($file_ext); //转换为小写
        // $file_ext = str_ireplace('::$DATA', '', $file_ext);//去除字符串::$DATA
        // $file_ext = trim($file_ext); //首尾去空
        // */

        $file_name = $_POST['save_name'];
        $file_ext = pathinfo($file_name,PATHINFO_EXTENSION);
        echo $file_ext.explode(".", $file_name)[1];
        if(in_array(explode(".", $file_name)[1],$deny_ext)) {
            $temp_file = $_FILES['upload_file']['tmp_name'];
            $img_path = 'jpg' . '/' .$file_name;
            if (move_uploaded_file($temp_file, $img_path)) { 
                $is_upload = true;
                echo "Done !!!";
            }else{
                $msg = 'error';
            }
        }else{
            $msg = 'error';
        }


