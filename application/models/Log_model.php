<?php
/*   ________________________________________
    |                 satriaCBT              |
    |    https://github.com/satriacbt/cbt    |
    |________________________________________|
*/
 class Log_model extends CI_Model { function __construct() { parent::__construct(); $this->load->library("\x75\x73\145\x72\x5f\x61\147\145\156\164"); } public function saveLog($type, $desc) { goto vVPja; kI_20: if ($this->agent->is_browser()) { goto ot30w; } goto lZ_gE; AX_ry: $this->insertLog($user_id, $group->id, $group->name, $type, $desc, $agent, $os, $ip); goto TZ3Pb; dF4pp: $group = $this->ion_auth->get_users_groups($user_id)->row(); goto kI_20; QOUBa: VwdMr: goto WwKQr; WwKQr: $agent = $this->agent->mobile(); goto FGPpM; QJFuo: goto hpbfW; goto QCe55; ZQv4i: $agent = "\x44\141\x74\141\40\165\x73\145\162\x20\147\x61\x67\x61\154\40\144\x69\40\144\x61\160\x61\x74\x6b\141\156"; goto QJFuo; vVPja: $user_id = $this->ion_auth->user()->row()->id; goto dF4pp; FGPpM: hpbfW: goto L9M50; j5A3j: $agent = $this->agent->browser() . "\40" . $this->agent->version(); goto RPmvT; exyY6: $ip = $this->input->ip_address(); goto AX_ry; RPmvT: goto hpbfW; goto QOUBa; lZ_gE: if ($this->agent->is_mobile()) { goto VwdMr; } goto ZQv4i; QCe55: ot30w: goto j5A3j; L9M50: $os = $this->agent->platform(); goto exyY6; TZ3Pb: } private function insertLog($id_user, $group_id, $group_name, $type, $desc, $agent, $os, $ip) { $data = array("\151\x64\x5f\x75\x73\145\162" => $id_user, "\x69\144\x5f\147\162\x6f\x75\x70" => $group_id, "\x6e\141\155\x65\x5f\147\162\157\x75\x70" => $group_name, "\x6c\x6f\147\137\x64\145\163\143" => $desc, "\x61\144\x64\x72\145\x73\x73" => $ip, "\x61\147\145\x6e\x74" => $agent, "\144\x65\x76\151\143\x65" => $os); $this->db->insert("\154\157\x67", $data); } public function loadNotifikasi() { } public function loadChat() { } public function loadAktifitas($limit = null) { goto CxLFl; CxLFl: $this->db->query("\x53\105\x54\x20\123\121\114\137\x42\x49\x47\x5f\123\x45\x4c\105\x43\x54\123\x3d\x31"); goto r1rPZ; X8LUS: if (!($limit != null)) { goto GpR9l; } goto ZcW5V; r1rPZ: $this->db->select("\141\x2e\52\x2c\40\x62\x2e\x66\151\x72\x73\x74\137\156\141\155\145\x2c\x20\142\x2e\x6c\x61\x73\164\137\x6e\141\x6d\145\x2c\40\144\x2e\x6e\141\155\x65"); goto MsmF2; pplGw: $this->db->join("\165\163\145\x72\x73\x20\142", "\142\56\x69\x64\75\141\x2e\x69\x64\x5f\x75\163\145\x72", "\x6c\x65\x66\164"); goto G1Bo2; ZcW5V: $this->db->limit($limit, 0); goto tGWXZ; tGWXZ: GpR9l: goto FTEpZ; G1Bo2: $this->db->join("\x67\162\157\165\160\163\40\x64", "\x64\56\151\144\75\141\x2e\x69\144\137\x67\162\157\165\x70"); goto X8LUS; o6zeK: return $this->db->get()->result(); goto x760v; MsmF2: $this->db->from("\154\157\147\x20\x61"); goto pplGw; FTEpZ: $this->db->order_by("\x61\x2e\154\157\147\137\164\151\155\x65", "\x44\x45\123\103"); goto o6zeK; x760v: } public function loadAktifitasSiswa($limit = null) { goto vCCir; oemE8: $this->db->join("\x67\162\157\165\160\x73\40\144", "\144\56\151\144\x3d\x61\x2e\x69\x64\x5f\147\162\x6f\165\160"); goto JAZQt; JPVAq: $this->db->where("\141\56\151\144\137\x67\162\157\165\x70", "\63"); goto VM5bA; XOPoD: $this->db->select("\x61\56\52\54\x20\142\x2e\x66\151\162\163\x74\x5f\x6e\x61\x6d\145\x2c\40\142\56\154\x61\x73\164\137\156\x61\x6d\x65\x2c\40\144\56\156\141\x6d\x65"); goto XaiYL; VM5bA: $this->db->order_by("\x61\56\x6c\157\147\137\x74\x69\155\145", "\104\105\x53\103"); goto Mnt9G; Mnt9G: return $this->db->get()->result(); goto FKGd6; kHpJS: mdyLe: goto JPVAq; I4i7v: $this->db->join("\x75\x73\145\162\x73\40\142", "\142\x2e\x69\x64\x3d\141\x2e\x69\x64\x5f\165\163\145\162", "\154\145\146\x74"); goto oemE8; Y6xw5: $this->db->limit($limit, 0); goto kHpJS; JAZQt: if (!($limit != null)) { goto mdyLe; } goto Y6xw5; XaiYL: $this->db->from("\154\157\x67\40\141"); goto I4i7v; vCCir: $this->db->query("\x53\x45\x54\40\123\x51\114\137\x42\x49\107\137\123\105\114\x45\103\x54\123\x3d\x31"); goto XOPoD; FKGd6: } }
