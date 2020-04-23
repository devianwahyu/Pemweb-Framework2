<?php

class Blog_model extends CI_Model
{
	public function get_posts()
	{
		$this->load->database();

		// Query select biasa
		// $query = $this->db->query('SELECT * FROM post');
		// return $query->result();

		// Query select using Query Builder
		$query = $this->db->get('post');
		return $query->result();
	}

	public function insert_post($judul, $konten)
	{
		$this->load->database();

		// Query insert biasa
		// $this->db->query("INSERT INTO post (judul, konten) VALUES ('$judul', '$konten')");

		$data = [
			'judul' => $judul,
			'konten' => $konten
		];

		// Query insert using Query Builder
		$this->db->insert('post', $data);
	}

	public function delete_post($id)
	{
		$this->load->database();

		// Query delete biasa
		// $this->db->query("DELETE FROM post WHERE id = $id");

		// Query delete using Qury Builder
		$this->db->delete('post', ['id' => $id]);
	}

	public function update_post($id, $judul, $konten)
	{
		$this->load->database();

		// Query update biasa
		// $this->db->query("UPDATE post SET judul = '$judul', konten = '$konten' WHERE id = $id");

		$data = [
			'judul' => $judul,
			'konten' => $konten
		];

		// Query update using Query Builder
		$this->db->update('post', $data);
	}
}
