<?php
/*   ________________________________________
    |                 satriaCBT              |
    |    https://github.com/satriacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\x50\x41\x54\110") or exit("\x4e\x6f\40\x64\151\x72\x65\x63\164\40\x73\143\162\x69\x70\x74\x20\141\x63\x63\x65\163\163\40\x61\154\154\x6f\167\145\x64"); class Users extends CI_Controller { public function __construct() { goto bs4L1; njsYu: if ($this->ion_auth->logged_in()) { goto U42cw; } goto RIcgy; IW18m: $this->load->model("\x44\x61\x73\150\x62\157\141\x72\x64\137\155\157\x64\145\154", "\x61\x64\155\151\156\x64\141\x73\x68\142\157\x61\x72\x64"); goto tW6KL; tW6KL: $this->form_validation->set_error_delimiters('', ''); goto FEqRx; lcFez: $this->load->model("\125\x73\x65\162\x73\137\155\x6f\144\145\154", "\x75\x73\x65\x72\163"); goto St9fo; Zd_kS: $this->load->library(["\x64\x61\164\x61\x74\x61\x62\x6c\145\x73", "\146\x6f\162\155\x5f\x76\x61\154\x69\144\x61\164\x69\x6f\156"]); goto lcFez; RIcgy: redirect("\x61\165\164\150"); goto M3hnq; M3hnq: U42cw: goto Zd_kS; St9fo: $this->load->model("\x4d\141\x73\164\145\162\x5f\155\x6f\x64\x65\x6c", "\155\x61\x73\x74\x65\x72"); goto IW18m; bs4L1: parent::__construct(); goto njsYu; FEqRx: } public function is_admin() { goto FfOlV; LYoDR: Dvebi: goto zoxKB; FfOlV: if ($this->ion_auth->is_admin()) { goto Dvebi; } goto qMeft; qMeft: show_error("\110\x61\x6e\171\141\40\x41\x64\x6d\x69\x6e\x69\x73\x74\162\141\164\x6f\162\40\x79\x61\156\x67\x20\x64\151\142\x65\x72\x69\x20\x68\x61\x6b\40\x75\156\x74\165\x6b\x20\155\x65\156\x67\141\x6b\x73\x65\163\40\150\x61\154\x61\x6d\141\156\40\x69\x6e\151\54\40\74\x61\40\x68\x72\145\x66\x3d\42" . base_url("\x64\141\163\150\x62\157\141\162\144") . "\42\x3e\x4b\x65\x6d\x62\141\x6c\151\40\x6b\145\x20\155\145\x6e\x75\x20\x61\x77\x61\x6c\74\57\x61\x3e", 403, "\101\x6b\163\x65\163\x20\x54\145\162\154\141\x72\141\x6e\147"); goto LYoDR; zoxKB: } public function output_json($data, $encode = true) { goto qT9g0; c9oyt: $data = json_encode($data); goto F_IYm; vm2zX: $this->output->set_content_type("\x61\160\x70\154\151\x63\x61\164\151\x6f\156\57\152\x73\157\156")->set_output($data); goto P2bOX; qT9g0: if (!$encode) { goto m3xjf; } goto c9oyt; F_IYm: m3xjf: goto vm2zX; P2bOX: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto uYDF1; mQnJL: $data["\164\x70"] = $this->admindashboard->getTahun(); goto e18TL; gu0kU: $this->load->view("\x75\x73\145\162\163\57\144\x61\164\141"); goto M2RKU; uYDF1: $this->is_admin(); goto wYWJ_; M2RKU: $this->load->view("\137\x74\145\155\x70\x6c\141\164\145\163\x2f\x64\x61\163\150\142\x6f\141\162\144\57\x66\157\157\x74\145\162\56\160\x68\160"); goto eOW5w; e18TL: $data["\164\160\137\x61\143\x74\151\166\x65"] = $this->admindashboard->getTahunActive(); goto YBC7X; pcnwn: $data["\163\x6d\x74\137\141\143\x74\151\166\x65"] = $this->admindashboard->getSemesterActive(); goto sJbPY; wYWJ_: $data = ["\x75\x73\145\x72" => $this->ion_auth->user()->row(), "\x6a\165\144\165\x6c" => "\x55\x73\145\x72\40\115\141\156\x61\147\145\x6d\x65\x6e\164", "\x73\165\x62\152\165\144\x75\x6c" => "\104\x61\164\141\40\x55\x73\145\x72"]; goto mQnJL; YBC7X: $data["\163\155\164"] = $this->admindashboard->getSemester(); goto pcnwn; sJbPY: $this->load->view("\x5f\x74\145\155\160\x6c\x61\x74\145\163\x2f\x64\x61\163\150\x62\x6f\141\x72\x64\57\x68\x65\141\x64\145\162\56\160\150\x70", $data); goto gu0kU; eOW5w: } public function edit($id) { goto Jiykv; lAUfW: $data = ["\x75\x73\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\x75\154" => "\x55\x73\x65\x72\40\x4d\141\156\141\x67\145\155\x65\x6e\164", "\163\165\x62\152\x75\x64\x75\x6c" => "\x45\x64\151\x74\40\104\141\x74\x61\x20\125\163\x65\x72", "\165\x73\x65\162\x73" => $this->ion_auth->user($id)->row(), "\147\x72\157\x75\160\x73" => $this->ion_auth->groups()->result(), "\x6c\145\x76\x65\x6c" => $level[0]]; goto LnRYx; NLsNV: $this->load->view("\x5f\x74\x65\155\160\154\141\x74\x65\x73\57\x64\x61\x73\x68\x62\x6f\141\x72\x64\57\146\157\157\164\145\162\56\x70\x68\160"); goto TuMbw; Jiykv: $level = $this->ion_auth->get_users_groups($id)->result(); goto lAUfW; LnRYx: $this->load->view("\x5f\x74\145\155\160\154\141\x74\x65\x73\x2f\x64\141\163\150\142\x6f\141\162\144\57\150\x65\141\144\x65\x72\x2e\x70\150\x70", $data); goto kUx17; kUx17: $this->load->view("\165\x73\x65\162\x73\x2f\x65\x64\151\164"); goto NLsNV; TuMbw: } public function edit_info() { goto VKu8C; FeKtK: $data["\163\164\141\x74\x75\163"] = false; goto R_N1_; oxwPr: $this->form_validation->set_rules("\x6c\x61\x73\x74\137\156\141\155\x65", "\x4c\141\x73\164\x20\x4e\141\155\x65", "\162\x65\161\165\x69\162\x65\144"); goto tt_B9; xcmIY: $id = $this->input->post("\151\144", true); goto Sjlps; ReIVW: ON7al: goto FeKtK; XYK2c: $update = $this->master->update("\x75\163\x65\x72\163", $input, "\151\144", $id); goto ZfJKz; R_N1_: $data["\145\x72\162\x6f\162\163"] = ["\165\163\145\x72\156\x61\x6d\x65" => form_error("\165\x73\x65\x72\x6e\x61\155\x65"), "\146\151\x72\163\164\137\156\x61\x6d\x65" => form_error("\x66\151\x72\163\164\x5f\156\141\155\x65"), "\154\x61\163\x74\137\x6e\x61\x6d\145" => form_error("\x6c\141\x73\x74\x5f\156\141\155\145"), "\145\155\141\x69\154" => form_error("\x65\x6d\x61\151\154")]; goto DczJY; tt_B9: $this->form_validation->set_rules("\145\155\141\151\154", "\105\155\141\x69\x6c", "\x72\x65\161\165\151\x72\145\x64\x7c\166\x61\x6c\x69\144\137\x65\x6d\x61\151\154"); goto IhImS; HcM2W: goto gSNX1; goto ReIVW; VKu8C: $this->is_admin(); goto db_dz; YO0KO: $this->form_validation->set_rules("\146\x69\162\163\164\137\x6e\141\x6d\145", "\x46\151\x72\x73\x74\x20\116\141\155\x65", "\162\145\161\x75\x69\x72\145\144"); goto oxwPr; db_dz: $this->form_validation->set_rules("\165\163\x65\x72\x6e\141\x6d\x65", "\125\163\x65\x72\156\141\155\x65", "\162\x65\x71\x75\x69\162\145\144"); goto YO0KO; IhImS: if ($this->form_validation->run() === FALSE) { goto ON7al; } goto xcmIY; ZfJKz: $data["\x73\x74\x61\x74\x75\163"] = $update ? true : false; goto HcM2W; DczJY: gSNX1: goto zpFo9; Sjlps: $input = ["\x75\x73\x65\x72\156\141\155\145" => $this->input->post("\165\163\x65\x72\x6e\x61\x6d\145", true), "\x66\151\162\x73\164\137\x6e\x61\155\145" => $this->input->post("\x66\151\162\x73\x74\137\156\x61\155\145", true), "\x6c\x61\163\x74\137\x6e\141\155\145" => $this->input->post("\x6c\141\x73\164\x5f\156\x61\x6d\145", true), "\x65\155\x61\x69\x6c" => $this->input->post("\145\155\141\151\154", true)]; goto XYK2c; zpFo9: $this->output_json($data); goto sgyAw; sgyAw: } public function edit_status() { goto M8dIt; xgdwW: Q5qmo: goto n3RnL; tuiUE: $data["\x73\164\141\164\165\x73"] = false; goto im309; MIRRb: $data["\163\164\x61\164\x75\x73"] = $update ? true : false; goto muHul; EppWy: sVgKP: goto tuiUE; rbPhv: $update = $this->master->update("\x75\163\145\162\x73", $input, "\151\144", $id); goto MIRRb; im309: $data["\145\x72\x72\157\162\163"] = ["\x73\164\x61\x74\165\163" => form_error("\x73\164\141\x74\x75\x73")]; goto xgdwW; kBZx_: if ($this->form_validation->run() === FALSE) { goto sVgKP; } goto Ikl3r; Ikl3r: $id = $this->input->post("\x69\x64", true); goto fr8lN; muHul: goto Q5qmo; goto EppWy; M8dIt: $this->is_admin(); goto ZMAlR; fr8lN: $input = ["\x61\x63\164\x69\x76\145" => $this->input->post("\x73\x74\141\164\165\163", true)]; goto rbPhv; n3RnL: $this->output_json($data); goto g97BO; ZMAlR: $this->form_validation->set_rules("\x73\x74\141\164\165\163", "\123\x74\141\x74\x75\163", "\x72\145\x71\x75\151\x72\x65\144"); goto kBZx_; g97BO: } public function edit_level() { goto Nh7AB; tPPvA: $update = $this->master->update("\x75\163\145\162\163\x5f\147\x72\157\x75\x70\x73", $input, "\x75\163\145\162\x5f\x69\144", $id); goto ubHqM; Nh7AB: $this->is_admin(); goto w52YF; WK4IB: $data["\x73\164\x61\x74\x75\163"] = false; goto wZOJI; B22AJ: $this->output_json($data); goto nxBFs; w52YF: $this->form_validation->set_rules("\154\145\x76\145\x6c", "\x4c\145\166\x65\154", "\162\x65\161\x75\151\162\145\x64"); goto uc2bO; prCb5: $id = $this->input->post("\151\144", true); goto rKkoO; rKkoO: $input = ["\147\162\x6f\x75\x70\x5f\151\144" => $this->input->post("\x6c\145\166\x65\154", true)]; goto tPPvA; ubHqM: $data["\x73\164\141\x74\165\x73"] = $update ? true : false; goto LKbXy; ststV: r1dmq: goto B22AJ; LKbXy: goto r1dmq; goto mBD2M; wZOJI: $data["\145\162\x72\x6f\162\163"] = ["\154\x65\166\x65\x6c" => form_error("\x6c\145\166\145\154")]; goto ststV; mBD2M: rUXHv: goto WK4IB; uc2bO: if ($this->form_validation->run() === FALSE) { goto rUXHv; } goto prCb5; nxBFs: } public function change_password() { goto NjxV7; mVvAP: $data = ["\163\x74\141\164\165\x73" => false, "\145\162\162\x6f\162\163" => ["\157\154\x64" => form_error("\157\154\x64"), "\x6e\x65\x77" => form_error("\x6e\x65\167"), "\x6e\x65\167\x5f\x63\x6f\156\x66\x69\x72\155" => form_error("\156\x65\x77\137\143\157\156\x66\151\162\x6d")]]; goto CGW5u; oLZPw: goto VsjoP; goto IqYL7; JnKOE: Cai6u: goto FjqwJ; NjxV7: $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\143\x68\141\156\x67\x65\137\x70\x61\x73\x73\167\x6f\162\144\137\x76\141\x6c\x69\144\x61\164\x69\x6f\x6e\x5f\157\154\144\x5f\160\141\x73\x73\x77\157\x72\x64\137\x6c\x61\x62\x65\154"), "\x72\145\x71\165\151\162\145\x64"); goto nrhbZ; CGW5u: VsjoP: goto p6zY7; Codoa: goto LONcn; goto JnKOE; FjqwJ: $data["\163\x74\x61\x74\x75\163"] = true; goto DuUg9; nrhbZ: $this->form_validation->set_rules("\x6e\145\167", $this->lang->line("\x63\150\141\156\x67\145\137\x70\141\x73\x73\x77\x6f\162\144\137\x76\x61\x6c\151\144\x61\164\x69\157\x6e\137\156\145\x77\x5f\x70\141\163\163\x77\157\162\144\137\154\x61\142\145\154"), "\162\x65\161\165\x69\x72\x65\x64\174\x6d\x69\156\137\154\145\156\147\x74\x68\x5b" . $this->config->item("\155\x69\x6e\x5f\160\141\x73\x73\x77\x6f\162\x64\x5f\154\145\156\147\164\150", "\x69\x6f\x6e\x5f\x61\165\164\x68") . "\x5d\174\155\141\164\x63\150\x65\163\133\x6e\145\x77\x5f\x63\x6f\x6e\x66\x69\x72\x6d\135"); goto t2Dxw; t2Dxw: $this->form_validation->set_rules("\x6e\145\167\137\x63\x6f\156\x66\151\162\x6d", $this->lang->line("\x63\150\x61\156\x67\145\137\x70\x61\163\x73\167\x6f\x72\144\x5f\166\141\x6c\x69\x64\x61\x74\x69\x6f\156\x5f\x6e\145\x77\x5f\160\x61\x73\x73\167\x6f\x72\x64\x5f\x63\x6f\x6e\146\151\162\x6d\137\154\141\142\x65\154"), "\x72\x65\161\x75\151\x72\145\x64"); goto Ibu3u; aQhCq: if ($change) { goto Cai6u; } goto ehmRt; ehmRt: $data = ["\x73\x74\x61\164\165\x73" => false, "\155\x73\147" => $this->ion_auth->errors()]; goto Codoa; Lf7A8: $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\154\144"), $this->input->post("\156\145\167")); goto aQhCq; Ibu3u: if ($this->form_validation->run() === FALSE) { goto Q_63c; } goto B6P_c; DuUg9: LONcn: goto oLZPw; B6P_c: $identity = $this->session->userdata("\151\x64\x65\156\x74\x69\x74\171"); goto Lf7A8; IqYL7: Q_63c: goto mVvAP; p6zY7: $this->output_json($data); goto iR9Bd; iR9Bd: } public function delete($id) { goto p_1Hh; p_1Hh: $this->is_admin(); goto Am7mx; tmFWW: $this->output_json($data); goto fnIMv; Am7mx: $data["\x73\x74\141\x74\165\163"] = $this->ion_auth->delete_user($id) ? true : false; goto tmFWW; fnIMv: } }
