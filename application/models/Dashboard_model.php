<?php
/*   ________________________________________
    |                 satriaCBT              |
    |    https://github.com/satriacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\120\x41\124\x48") or exit("\x4e\157\x20\144\x69\162\145\143\x74\40\163\143\162\x69\x70\x74\x20\141\143\143\x65\163\163\x20\141\x6c\x6c\x6f\x77\x65\x64"); class Dashboard_model extends CI_Model { public function getSetting() { return $this->db->get("\163\145\164\x74\151\156\147")->row(); } public function getRunningText() { return $this->db->get("\x72\165\156\156\x69\x6e\x67\137\x74\x65\170\x74")->result(); } public function total($table, $where = null) { goto M1B3B; G0rW0: return $this->db->get($table)->num_rows(); goto mvU3F; lEwV_: Vg77N: goto G0rW0; M1B3B: if (!($where != null)) { goto Vg77N; } goto t4Wb8; t4Wb8: $this->db->where($where); goto lEwV_; mvU3F: } public function hapus($table, $data, $pk) { $this->db->where_in($pk, $data); return $this->db->delete($table); } public function getProfileAdmin($id_user) { goto h3eT4; FWOQ_: return $this->db->get()->row(); goto cm_Zr; CHKpp: $this->db->where("\x61\x2e\151\144", $id_user); goto FWOQ_; h3eT4: $this->db->select("\x62\x2e\x2a"); goto XP7HB; jdvpf: $this->db->join("\x75\x73\x65\x72\163\x5f\x70\162\x6f\146\151\154\145\x20\142", "\x61\x2e\151\144\x3d\142\x2e\151\x64\x5f\x75\x73\x65\162", "\x6c\145\x66\164"); goto CHKpp; XP7HB: $this->db->from("\165\163\145\162\x73\x20\141"); goto jdvpf; cm_Zr: } public function totalWaliKelas($id_tp, $id_smt) { goto ciDqP; BFag9: $this->db->where("\151\144\x5f\163\155\x74", $id_smt); goto otKwu; R8N39: $this->db->where("\151\144\x5f\x74\160", $id_tp); goto BFag9; ciDqP: $this->db->where("\151\x64\137\152\x61\142\141\164\x61\x6e", "\64"); goto R8N39; otKwu: return $this->db->get("\152\141\142\x61\164\141\156\137\147\x75\x72\x75")->num_rows(); goto F8_Pi; F8_Pi: } public function totalSiswaKelas($id_kelas, $id_tp, $id_smt) { goto Y2uMG; e8qV8: $this->db->where("\x61\56\151\144\x5f\x73\x6d\164", $id_smt); goto iziKt; nm4fl: return $this->db->get()->num_rows(); goto j3LoU; KZF0w: $this->db->from("\153\145\x6c\141\x73\137\163\x69\x73\x77\141\x20\141"); goto ePrsI; ePrsI: $this->db->where("\141\x2e\151\144\x5f\x74\x70", $id_tp); goto e8qV8; iziKt: $this->db->where("\x61\x2e\x69\144\137\153\145\154\x61\x73", $id_kelas); goto nm4fl; Y2uMG: $this->db->select("\x61\56\x69\x64\x5f\x73\151\163\x77\x61"); goto KZF0w; j3LoU: } public function totalPengawas() { goto oizkN; oizkN: $this->db->select("\x2a"); goto HQPdK; HQPdK: $this->db->where("\151\144\x5f\x6a\141\144\167\141\x6c\x20\41\75", "\141\x3a\x30\x3a\x7b\x7d"); goto Gs9wN; Gs9wN: return $this->db->get("\143\x62\x74\137\160\145\x6e\147\141\167\x61\x73")->num_rows(); goto R8F9z; R8F9z: } public function totalJadwal() { $this->db->select("\x2a"); return $this->db->get("\x63\x62\164\137\x6a\141\x64\x77\x61\x6c")->num_rows(); } public function getDataTahun() { goto Umswp; SzMdS: return $this->datatables->generate(); goto WtQ9I; W3u4H: $this->datatables->from("\155\141\163\164\145\x72\137\164\x70"); goto SzMdS; Umswp: $this->datatables->select("\x69\x64\x5f\x74\x70\x2c\x20\164\141\150\165\156\x2c\40\x61\x63\x74\x69\166\145"); goto W3u4H; WtQ9I: } public function getTahun() { $this->db->order_by("\x74\x61\x68\x75\x6e", "\101\x53\103"); return $this->db->get("\x6d\141\163\x74\x65\x72\x5f\164\x70")->result(); } public function getTahunById($id) { return $this->db->get_where("\x6d\x61\x73\x74\145\x72\x5f\164\x70", "\151\x64\x5f\164\160\x3d" . $id)->row(); } public function getTahunByTahun($tahun) { return $this->db->get_where("\155\x61\163\x74\x65\162\137\164\x70", "\x74\141\150\165\x6e\x3d" . "\x22" . $tahun . "\x22")->row(); } public function getTahunActive() { goto s5JMO; gLwaX: $this->db->where("\x61\143\x74\x69\x76\145", 1); goto GZs9Q; s5JMO: $this->db->select("\x69\x64\137\x74\160\x2c\x20\164\141\150\x75\x6e"); goto eGd5x; eGd5x: $this->db->from("\155\x61\163\x74\x65\162\x5f\164\160"); goto gLwaX; GZs9Q: return $this->db->get()->row(); goto EkKzl; EkKzl: } public function getSemester() { $this->db->order_by("\163\x6d\164", "\101\123\x43"); return $this->db->get("\155\x61\x73\x74\145\162\137\163\x6d\x74")->result(); } public function getSemesterById($id) { return $this->db->get_where("\155\x61\x73\x74\x65\x72\137\163\155\x74", "\x69\144\x5f\163\155\164\75" . $id)->row(); } public function getSemesterByNama($nama_smt) { return $this->db->get_where("\155\x61\x73\x74\145\162\137\163\x6d\x74", "\156\x61\x6d\141\x5f\163\x6d\x74\x3d" . "\42" . $nama_smt . "\42")->row(); } public function getSemesterActive() { goto xTJe2; SecHF: $this->db->from("\x6d\x61\163\164\x65\162\x5f\x73\x6d\164"); goto iv5sb; xTJe2: $this->db->select("\151\144\137\x73\155\x74\x2c\40\156\141\155\141\x5f\x73\x6d\x74\54\40\x73\x6d\x74"); goto SecHF; oEvas: return $this->db->get()->row(); goto IAXHj; iv5sb: $this->db->where("\141\x63\x74\x69\166\x65", 1); goto oEvas; IAXHj: } public function getDataGuruByUserId($id_user, $id_tp, $id_smt) { goto tphiu; s8p1F: $this->db->join("\x6d\x61\x73\x74\145\162\137\x6b\x65\x6c\141\163\x20\146", "\141\x2e\151\x64\x5f\x67\x75\162\x75\75\146\56\x67\165\162\x75\137\x69\144\40\101\116\104\40\x66\x2e\151\x64\x5f\164\x70\x3d" . $id_tp . "\x20\101\116\104\x20\x66\56\x69\144\137\x73\155\164\x3d" . $id_smt, "\x6c\x65\x66\164"); goto bIzny; tphiu: $this->db->query("\x53\105\124\40\x53\x51\114\137\x42\x49\107\x5f\x53\x45\114\105\103\124\123\75\x31"); goto C05w7; V3SaN: $this->db->join("\152\x61\142\x61\164\x61\x6e\x5f\147\165\162\x75\x20\x62", "\141\x2e\151\x64\137\x67\x75\162\165\x3d\142\x2e\151\x64\x5f\x67\x75\162\165\40\x41\116\104\x20\142\x2e\x69\144\137\164\x70\75" . $id_tp . "\x20\101\116\x44\40\x62\x2e\x69\x64\137\163\x6d\x74\75" . $id_smt, "\154\145\146\x74"); goto QYx1g; c4M1R: return $this->db->get()->row(); goto WFP4e; CblpN: $this->db->where("\x61\56\151\144\137\x75\163\x65\162", $id_user); goto c4M1R; QYx1g: $this->db->join("\154\x65\x76\x65\x6c\x5f\x67\165\x72\x75\40\145", "\142\x2e\151\x64\x5f\152\141\142\x61\x74\x61\x6e\x3d\x65\56\x69\x64\x5f\x6c\145\x76\x65\x6c", "\x6c\x65\146\164"); goto s8p1F; bIzny: $this->db->join("\x6c\145\x76\x65\154\137\x6b\145\x6c\141\x73\x20\x67", "\x66\56\154\145\166\145\x6c\137\151\144\x3d\147\56\x69\144\137\x6c\x65\x76\145\154", "\x6c\145\146\x74"); goto CblpN; Gx888: $this->db->from("\155\x61\x73\x74\145\162\137\x67\165\x72\x75\x20\x61"); goto V3SaN; C05w7: $this->db->select("\141\56\x69\144\137\147\x75\x72\x75\54\40\141\x2e\x6e\x61\x6d\141\137\x67\165\x72\165\x2c\40\x61\56\x6e\151\x70\x2c\x20\x61\56\151\x64\x5f\x75\x73\145\x72\54\x20\141\x2e\146\x6f\x74\157\x2c\40\142\x2e\x69\x64\x5f\x6a\141\x62\x61\x74\x61\156\x2c\x20\x62\x2e\151\x64\x5f\153\x65\x6c\x61\163\x20\141\x73\x20\x77\141\154\x69\137\153\145\154\x61\163\54\x20\x66\x2e\x6c\145\x76\x65\154\137\151\144\x2c\x20\x67\x2e\x6c\145\166\x65\154"); goto Gx888; WFP4e: } public function getDataGuruById($id_guru, $id_tp, $id_smt) { goto egber; tFYsQ: $this->db->join("\154\145\x76\145\x6c\137\x6b\x65\154\141\x73\40\x67", "\146\56\x6c\x65\166\145\154\137\151\144\x3d\147\x2e\151\x64\x5f\154\145\x76\145\x6c", "\x6c\145\146\x74"); goto OmLgs; VstQo: $this->db->join("\152\x61\x62\x61\x74\141\x6e\137\x67\165\x72\x75\x20\x62", "\141\x2e\x69\144\137\x67\165\x72\165\75\142\x2e\151\x64\x5f\x67\x75\162\x75\x20\x41\x4e\104\40\142\56\x69\144\137\164\x70\75" . $id_tp . "\x20\x41\116\x44\40\x62\x2e\x69\144\x5f\163\x6d\164\75" . $id_smt, "\154\145\146\x74"); goto iefGC; uL0GW: $this->db->join("\155\141\x73\x74\x65\162\137\153\145\154\141\x73\x20\x66", "\141\x2e\151\144\x5f\x67\x75\x72\165\75\146\x2e\x67\x75\x72\x75\x5f\x69\x64\40\x41\116\104\x20\146\x2e\151\x64\137\x74\160\75" . $id_tp . "\x20\101\116\x44\x20\x66\56\151\144\x5f\163\x6d\164\75" . $id_smt, "\154\145\146\164"); goto tFYsQ; RBteE: $this->db->select("\141\56\151\144\x5f\147\165\162\165\x2c\x20\141\56\156\x61\x6d\141\137\147\x75\162\x75\x2c\x20\x61\x2e\x6e\x69\x70\x2c\40\141\x2e\x69\x64\x5f\165\163\x65\x72\x2c\40\x61\x2e\x66\x6f\x74\157\54\x20\142\x2e\151\x64\x5f\152\141\142\141\164\x61\156\x2c\40\142\x2e\151\x64\x5f\x6b\x65\x6c\141\x73\x20\141\x73\x20\167\x61\154\151\137\153\145\154\141\163\x2c\x20\x66\x2e\x6c\x65\166\x65\154\x5f\x69\x64\x2c\40\147\56\154\145\x76\145\x6c"); goto UmWKZ; iefGC: $this->db->join("\154\x65\166\x65\x6c\137\147\x75\x72\165\40\x65", "\x62\56\151\144\137\x6a\x61\142\141\164\x61\x6e\x3d\145\x2e\x69\144\137\x6c\x65\x76\145\x6c", "\x6c\145\146\x74"); goto uL0GW; egber: $this->db->query("\x53\x45\124\x20\123\121\114\x5f\x42\x49\107\137\x53\105\x4c\105\103\124\123\x3d\x31"); goto RBteE; J9MdY: return $this->db->get()->row(); goto hLNWC; UmWKZ: $this->db->from("\x6d\x61\x73\164\145\162\137\x67\x75\162\x75\40\x61"); goto VstQo; OmLgs: $this->db->where("\141\56\x69\x64\137\147\165\162\x75", $id_guru); goto J9MdY; hLNWC: } public function getListGuruByUserId($id_tp, $id_smt) { goto cm2PK; wb3oI: foreach ($query as $guru) { $rest[$guru->id_guru] = $guru; D5sYL: } goto Na6gW; ebUHx: $this->db->join("\152\141\142\141\164\141\156\137\x67\x75\x72\165\x20\x62", "\x61\56\151\x64\137\x67\165\162\165\x3d\142\x2e\x69\x64\x5f\147\165\x72\165\40\101\x4e\104\x20\142\x2e\151\x64\x5f\164\x70\x3d" . $id_tp . "\x20\x41\116\104\40\142\56\x69\144\x5f\163\x6d\164\75" . $id_smt, "\x6c\x65\146\x74"); goto fyzKb; CRw6B: $this->db->select("\141\56\151\x64\x5f\x67\x75\162\x75\x2c\x20\x61\x2e\156\x61\x6d\141\x5f\x67\165\162\165\54\40\141\x2e\x69\x64\137\x75\x73\145\162\54\x20\x61\x2e\146\x6f\x74\x6f\54\x20\x62\x2e\x69\144\x5f\152\141\x62\141\x74\141\156\54\40\142\x2e\x69\144\137\x6b\145\x6c\141\163\40\x61\x73\x20\167\141\x6c\x69\137\x6b\145\x6c\x61\163\x2c\x20\146\56\x6c\145\x76\145\154\x5f\x69\144\54\x20\147\x2e\154\x65\166\x65\154"); goto Rp6rp; cm2PK: $this->db->query("\123\105\124\40\x53\x51\114\x5f\102\x49\x47\137\x53\x45\114\105\103\x54\x53\75\61"); goto CRw6B; Rp6rp: $this->db->from("\x6d\x61\163\164\145\162\137\147\x75\x72\165\x20\x61"); goto ebUHx; GIdhO: $this->db->join("\155\141\x73\164\x65\162\137\153\145\x6c\141\x73\x20\x66", "\141\x2e\151\144\x5f\x67\165\x72\165\x3d\146\56\x67\165\162\165\137\x69\x64\40\x41\116\104\x20\x66\56\151\144\137\164\160\75" . $id_tp . "\40\101\x4e\x44\40\146\x2e\151\144\137\163\155\x74\75" . $id_smt, "\x6c\x65\146\x74"); goto NlhND; OeBys: $rest = []; goto wb3oI; FMZ_j: $query = $this->db->get()->result(); goto OeBys; fyzKb: $this->db->join("\154\145\166\145\154\137\147\165\x72\x75\x20\x65", "\142\56\151\144\137\152\x61\x62\x61\164\x61\x6e\75\x65\56\151\x64\x5f\154\x65\166\x65\154", "\x6c\x65\x66\164"); goto GIdhO; V9z9n: return $rest; goto kaaig; NlhND: $this->db->join("\x6c\x65\166\x65\x6c\137\153\145\x6c\141\163\40\x67", "\146\56\x6c\x65\x76\x65\x6c\x5f\151\144\x3d\147\56\x69\144\137\154\x65\x76\x65\154", "\x6c\145\x66\164"); goto FMZ_j; Na6gW: QL_Ap: goto V9z9n; kaaig: } public function getDetailGuruByUserId($id_user, $id_tp, $id_smt) { goto v4Rdm; O21nN: $this->db->select("\x2a"); goto u4Yfg; jWIxh: $this->db->join("\152\x61\x62\x61\164\x61\x6e\x5f\x67\x75\x72\165\x20\142", "\141\x2e\x69\144\x5f\x67\165\x72\x75\75\142\x2e\x69\144\137\x67\x75\162\165\40\101\116\104\x20\x62\56\151\x64\137\164\x70\x3d" . $id_tp . "\x20\101\x4e\104\40\x62\x2e\x69\144\x5f\x73\x6d\164\75" . $id_smt, "\x6c\x65\x66\164"); goto u7EHD; Nb323: $this->db->join("\155\141\x73\164\145\x72\137\153\x65\x6c\141\163\x20\146", "\x61\56\151\144\x5f\147\x75\162\165\x3d\146\56\x67\165\x72\x75\x5f\x69\x64\40\x41\116\x44\x20\x66\x2e\x69\x64\x5f\164\x70\x3d" . $id_tp . "\x20\101\x4e\x44\x20\146\56\x69\144\137\163\155\x74\75" . $id_smt, "\x6c\x65\146\x74"); goto ohCQx; u4Yfg: $this->db->from("\155\141\163\164\145\x72\137\x67\165\162\165\x20\x61"); goto jWIxh; u7EHD: $this->db->join("\x6c\x65\x76\x65\154\x5f\147\165\162\165\x20\145", "\x62\56\151\x64\137\x6a\141\x62\x61\164\141\156\75\x65\56\151\144\137\x6c\145\166\145\x6c", "\x6c\x65\146\x74"); goto Nb323; v4Rdm: $this->db->query("\123\105\124\x20\x53\x51\114\x5f\102\111\x47\x5f\123\105\114\x45\103\x54\x53\75\x31"); goto O21nN; ohCQx: $this->db->where("\141\x2e\151\x64\x5f\x75\x73\145\x72", $id_user); goto Lm4EI; Lm4EI: return $this->db->get()->row(); goto lAslU; lAslU: } public function getKelasByMapel($id_mapel = null) { goto S8MME; eQggt: $this->db->select("\x2a"); goto etp7a; etp7a: $this->db->from("\x6d\x61\163\164\x65\162\137\153\x65\154\x61\163"); goto XU01U; coa5C: return $this->db->get()->row(); goto gRitl; S8MME: $this->db->query("\123\105\x54\x20\123\x51\x4c\137\x42\x49\107\x5f\x53\x45\114\105\103\124\123\x3d\x31"); goto eQggt; XU01U: $this->db->join("\x6d\141\163\x74\145\162\x5f\155\141\x70\x65\x6c\40\142", "\141\56\x6d\141\160\x65\x6c\137\x69\x64\x3d\142\56\151\144\x5f\155\x61\160\145\154", "\x6c\x65\x66\164"); goto mLHXj; mLHXj: $this->db->join("\154\x65\x76\x65\154\x5f\147\x75\162\x75\x20\x64", "\x61\56\154\x65\x76\145\154\x5f\151\x64\75\144\x2e\151\144\x5f\x6c\x65\x76\x65\154", "\154\x65\146\164"); goto coa5C; gRitl: } public function get_where($table, $pk, $id, $join = null, $order = null) { goto RsdI9; L_YQ0: j6i0u: goto mTSHb; oSiWL: I9uLF: goto L_YQ0; aRF85: return $this->db->get(); goto riIIp; mTSHb: if (!($order !== null)) { goto HboyQ; } goto xtCB5; RsdI9: $this->db->select("\x2a"); goto SFjpR; xtCB5: foreach ($order as $field => $sort) { $this->db->order_by($field, $sort); aAss5: } goto gblQL; kZAXN: HboyQ: goto aRF85; wP2Ur: if (!($join !== null)) { goto j6i0u; } goto DjwiQ; DjwiQ: foreach ($join as $table => $field) { $this->db->join($table, $field); dx6xg: } goto oSiWL; HxFDc: $this->db->where($pk, $id); goto wP2Ur; SFjpR: $this->db->from($table); goto HxFDc; gblQL: NU9A5: goto kZAXN; riIIp: } public function create($table, $data) { return $this->db->insert($table, $data); } public function update($table, $data, $pk, $id = null, $batch = false) { goto poxn7; ZSRNe: $insert = $this->db->update($table, $data, array($pk => $id)); goto GXxG1; xPXZt: return $insert; goto uCLU0; Hqlwc: goto OWhS3; goto i76Nx; i76Nx: h7byo: goto ZSRNe; poxn7: if ($batch === false) { goto h7byo; } goto e8iJn; GXxG1: OWhS3: goto xPXZt; e8iJn: $insert = $this->db->update_batch($table, $data, $pk); goto Hqlwc; uCLU0: } public function getDataSiswa($username, $id_tp, $id_smt) { goto t92Ij; g8rIt: $this->db->select("\x2a"); goto ddijm; RzDgr: $this->db->where("\165\x73\x65\162\156\x61\155\x65", $username); goto YE1lT; WWxZ7: $this->db->join("\155\x61\163\x74\x65\x72\x5f\153\x65\154\x61\x73\40\x63", "\142\56\151\x64\x5f\x6b\145\x6c\141\163\75\x63\56\x69\x64\137\x6b\x65\x6c\x61\163\40\101\x4e\104\40\x63\x2e\151\x64\x5f\164\160\x3d" . $id_tp . "\40\x41\116\x44\40\143\x2e\x69\x64\137\x73\155\x74\75" . $id_smt, "\x6c\x65\x66\x74"); goto Pevjl; bvmVU: $this->db->join("\153\x65\x6c\141\163\x5f\x73\151\163\x77\x61\x20\x62", "\141\x2e\x69\x64\137\x73\x69\x73\167\x61\x3d\x62\56\x69\x64\x5f\x73\x69\163\167\141\x20\101\116\104\40\x62\56\x69\x64\137\x74\160\75" . $id_tp . "\40\101\116\104\40\x62\56\x69\x64\137\163\155\164\x3d" . $id_smt, "\x6c\145\x66\x74"); goto WWxZ7; YE1lT: return $this->db->get()->row(); goto b1eSZ; ddijm: $this->db->from("\x6d\141\x73\164\145\162\137\x73\151\163\x77\x61\40\x61"); goto bvmVU; Pevjl: $this->db->join("\x63\142\164\x5f\x73\x65\163\x69\x5f\x73\x69\x73\x77\x61\40\x64", "\x61\x2e\x69\x64\137\163\151\163\x77\141\x3d\144\56\163\x69\163\167\141\137\151\144", "\x6c\x65\x66\x74"); goto RzDgr; t92Ij: $this->db->query("\x53\105\124\40\123\121\114\137\102\111\107\137\x53\x45\x4c\x45\103\x54\123\x3d\61"); goto g8rIt; b1eSZ: } public function loadPengumuman($id_for) { goto IxZ4S; Z_v1A: $this->db->where("\x6b\x65\x70\141\x64\141", $id_for); goto X7pjG; S6W5T: $this->db->from("\160\145\x6e\x67\x75\155\x75\x6d\141\x6e\x20\141"); goto gMicE; gMicE: $this->db->join("\x6d\141\x73\x74\x65\162\137\147\x75\x72\165\x20\142", "\141\56\x64\141\162\x69\75\142\56\x69\x64\x5f\147\x75\162\x75", "\154\145\146\x74"); goto Z_v1A; X7pjG: return $this->db->get()->result(); goto DHfs1; IxZ4S: $this->db->select("\x61\56\x2a\54\x20\x62\x2e\x6e\x61\155\x61\x5f\147\x75\162\x75\x2c\x20\x62\56\146\x6f\164\157"); goto S6W5T; DHfs1: } public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null) { goto PQwBI; T7Od8: $this->db->from("\x6b\x65\154\x61\163\137\152\141\x64\167\141\154\137\x6d\x61\160\x65\x6c\x20\141"); goto LPB4I; ECNOe: if (!($id_hari != null)) { goto jNTMc; } goto EBTrH; EBTrH: $this->db->where("\141\x2e\151\x64\x5f\150\141\x72\151", $id_hari); goto zAhVQ; PQwBI: $this->db->select("\x2a"); goto T7Od8; vUXno: $this->db->where("\x61\x2e\x69\144\x5f\x73\x6d\x74", $id_smt); goto C7d1M; WcSLp: return $this->db->get()->result(); goto cy08w; J3T6C: K2F2o: goto ECNOe; LPB4I: $this->db->join("\155\x61\163\x74\x65\162\137\155\141\x70\x65\x6c\x20\142", "\x62\x2e\151\x64\x5f\155\141\x70\145\154\75\x61\x2e\x69\144\x5f\155\x61\x70\x65\154", "\x6c\x65\x66\164"); goto y_uZJ; C7d1M: if (!($id_kelas != null)) { goto K2F2o; } goto LH0ov; zAhVQ: jNTMc: goto WcSLp; LH0ov: $this->db->where("\x61\56\x69\144\137\x6b\145\x6c\141\x73", $id_kelas); goto J3T6C; y_uZJ: $this->db->where("\x61\56\151\x64\137\164\160", $id_tp); goto vUXno; cy08w: } public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null) { goto Ih3uJ; cbcv3: $this->db->from("\153\x65\154\141\x73\x5f\152\141\144\x77\x61\x6c\137\153\142\x6d"); goto bKyy7; EeEW7: goto ccm5x; goto UpC_O; bKyy7: $this->db->where("\151\144\x5f\x74\160", $id_tp); goto M7FkY; ylCAL: if ($id_kelas != null) { goto YRYso; } goto gkUEU; M7FkY: $this->db->where("\151\x64\137\163\155\164", $id_smt); goto ylCAL; Ih3uJ: $this->db->select("\52"); goto cbcv3; Z1Gi7: return $query; goto ZySI_; UpC_O: YRYso: goto jWhNj; jWhNj: $this->db->where("\x69\144\x5f\153\145\154\x61\163", $id_kelas); goto UGzgt; gkUEU: $query = $this->db->get()->result(); goto EeEW7; UGzgt: $query = $this->db->get()->row(); goto gsk9A; gsk9A: ccm5x: goto Z1Gi7; ZySI_: } }
