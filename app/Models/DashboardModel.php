<?php
namespace App\Models;
use \CodeIgniter\Model;

class DashboardModel extends Model
{

public function getLoggedInUserData($id)
        {
        $builder=$this->db->table('users');
        $builder->where('uni_id',$id);	
        $result=$builder->get();
if(count($result->getResultArray())==1)
           {
           	return $result->getRow();
           }
else
             {
             	return false;
             }
        }

public function updateLogoutTime($id)
     {
       $builder=$this->db->table('login_activity');
        $builder->where('id',$id); 
        $builder->update(['logout_time'=>date('Y-m-d h:i:s')]) ;
        if($this->db->affectedRows()>0)
         {
          return true;
         }
     }

public function getLoginUserInfo($id)
    {
        $builder=$this->db->table('login_activity');
        $builder->where('uni_id',$id); 
        $builder->orderBy('id','DESC');
        $builder->limit(10); 
        $result=$builder->get();
        if(count($result->getResultArray())>0)
          {
return $result->getResult();
          } 
          else

          {
return false;
          }

    }

public function updateAvatar($path,$id)
{
  $builder=$this->db->table('users');
        $builder->where('uni_id',$id); 
        $builder->update(['profile_pic'=>$path]) ;
        if($this->db->affectedRows()>0)
         {
          return true;
         } 
         else
         {
          return false;
         }
}

public function updatePassword($new_password,$id)
   {
$builder=$this->db->table('users');
        $builder->where('uni_id',$id); 
        $builder->update(['password'=>$new_password]) ;
        if($this->db->affectedRows()>0)
         {
          return true;
         } 
         else
         {
          return false;
         }
   }

public function updateUserInfo($data,$id)
 {

$builder=$this->db->table('users');
        $builder->where('uni_id',$id); 
        $builder->update($data) ;
        if($this->db->affectedRows()>0)
         {
          return true;
         } 
         else
         {
          return false;
         }


 }



}