<?php
namespace App\Models;
use \CodeIgniter\Model; 
class RegisterModel extends Model
{
public function createUser($data)
  {

$builder=$this->db->table('users');
$res=$builder->insert($data);
if($this->db->affectedRows()==1)
       {
       	 return true;
       }
       else
          {
          	return false;
          }
  }
public function verifyUniId($id)
{
$builder=$this->db->table('users');
$builder->select('activation_date,uni_id,status');
$builder->where('uni_id',$id);
$result=$builder->get();

//echo count($result->getResultArray());
//echo $result->resultID->num_rows;
if(count($result->getResultArray())==1)

{
return $result->getRow();
}
else
{
return false;
}



}

public function updateStatus($uni_id)
       {
       	$builder=$this->db->table('users');
       	$builder->where('uni_id',$uni_id);
       	$builder->update(['status'=>'active']);
if($this->db->affectedRows()==1){
	return true;
}
else{
	return false;
}
       }
}