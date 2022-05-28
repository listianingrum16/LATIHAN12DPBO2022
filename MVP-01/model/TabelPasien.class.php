<?php

class TabelPasien extends DB
{
	function getPasien(){
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function addPasien($data){
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telepon = $data['telepon'];
		$query = "INSERT INTO pasien VALUES ('', '$nik', '$nama', '$tempat', 
			'$tl', '$gender', '$email', '$telepon')";
		return $this->execute($query);
	}
	
	function updatePasien($data){
		$id = $data['id'];
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telepon = $data['telepon'];
		$query = "UPDATE pasien SET nik = '$nik', nama = '$nama', 
			tempat = '$tempat', tl = '$tl', gender = '$gender', 
			email = '$email', telp = '$telepon' WHERE id = $id";
		return $this->execute($query);
	}

	function deletePasien($id){
        $query = "DELETE FROM pasien WHERE id = '$id'";
        return $this->execute($query);
    }

	function getWhere($id){
		$query = "SELECT * FROM pasien WHERE id = '$id'";
		return $this->execute($query);
	}

}

?>