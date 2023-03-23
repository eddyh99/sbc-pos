<?php
class Message{

    public function success_msg(){
        return "<font color='white'>Data telah tersimpan</font>";
    }
    
    public function error_msg($errmsg){
        return "<font color='white'>".$errmsg."</font>";
    }

    public function delete_msg(){
        return "<font color='white'>Data telah terhapus</font>";
    }

    public function error_delete_msg(){
        return "<font color='white'>Data gagal/sudah terhapus</font>";
    }

    public function active_msg(){
        return "<font color='white'>Data telah aktif</font>";
    }

    public function error_active_msg(){
        return "<font color='white'>Data gagal/sudah aktif</font>";
    }
}
?>