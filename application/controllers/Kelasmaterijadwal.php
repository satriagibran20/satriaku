<?php
/*   ________________________________________
    |                 satriaCBT              |
    |    https://github.com/satriacbt/cbt    |
    |________________________________________|
*/
 class Kelasmaterijadwal extends CI_Controller { public function __construct() { goto YH4jZ; VAqFS: $this->load->model("\x4c\x6f\147\x5f\x6d\x6f\144\x65\154", "\x6c\157\147\x67\151\x6e\147"); goto S_zdT; d8IjQ: $this->load->model("\103\x62\x74\137\x6d\157\x64\x65\x6c", "\x63\x62\164"); goto VAqFS; YH4jZ: parent::__construct(); goto biFIE; biFIE: if ($this->ion_auth->logged_in()) { goto mZYe4; } goto bQLL5; VGS6d: $this->load->library(["\x64\141\164\141\164\x61\x62\x6c\145\x73", "\x66\x6f\x72\155\x5f\166\x61\x6c\151\144\x61\x74\151\157\x6e"]); goto ZNtlz; S_zdT: $this->load->model("\113\145\x6c\141\x73\137\x6d\x6f\144\x65\x6c", "\153\145\154\141\163"); goto tr4Br; ds7Gi: $this->form_validation->set_error_delimiters('', ''); goto UwlTy; gT2Zt: $this->load->model("\x44\141\163\150\142\x6f\141\162\144\137\155\157\144\145\x6c", "\x64\141\163\150\x62\157\141\x72\144"); goto d8IjQ; tr4Br: $this->load->model("\x44\x72\x6f\160\x64\x6f\167\156\137\x6d\x6f\x64\145\154", "\144\x72\x6f\x70\144\157\167\x6e"); goto ds7Gi; ZNtlz: $this->load->model("\x4d\141\163\x74\145\x72\137\155\157\144\145\154", "\155\141\x73\x74\x65\162"); goto gT2Zt; V_EEX: mZYe4: goto VGS6d; bQLL5: redirect("\x61\x75\164\x68"); goto V_EEX; UwlTy: } public function output_json($data, $encode = true) { goto cRd6f; KxwVy: IAkqH: goto xR2il; bcbBK: $data = json_encode($data); goto KxwVy; cRd6f: if (!$encode) { goto IAkqH; } goto bcbBK; xR2il: $this->output->set_content_type("\x61\160\160\x6c\151\x63\141\x74\151\x6f\156\57\x6a\163\x6f\x6e")->set_output($data); goto LCt0f; LCt0f: } public function index() { goto qGJIA; D4scq: $data["\x6d\145\x74\x68\157\144"] = ''; goto oWlgT; jfZHU: $data["\x74\x70"] = $this->dashboard->getTahun(); goto NOICH; CHVsy: $data["\144\x61\x74\145\x5f\x73\x65\x6c\x65\x63\x74\145\x64"] = $thn . "\55" . $bln . "\x2d" . date("\x64"); goto KEquF; qGJIA: $user = $this->ion_auth->user()->row(); goto APB5y; XLie2: $tp = $this->dashboard->getTahunActive(); goto TGW1g; APB5y: $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\x75\154" => "\112\141\x64\167\141\x6c\x20\120\x65\154\141\152\x61\162\x61\156", "\163\165\x62\x6a\165\144\165\154" => "\x53\145\x74\x20\112\141\x64\x77\x61\154\40\x50\x65\x6c\141\152\141\162\x61\156", "\163\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto XLie2; FkJuD: $this->load->view("\x6d\145\x6d\142\145\x72\163\x2f\147\x75\x72\165\x2f\164\145\155\x70\154\x61\164\x65\x73\57\x68\145\141\x64\145\x72", $data); goto EIFjD; U7ZsM: $this->load->view("\x5f\x74\145\155\x70\x6c\141\x74\145\x73\57\144\141\x73\x68\142\x6f\x61\x72\144\57\137\x66\x6f\157\x74\x65\x72"); goto BIeCw; BIeCw: goto Admio; goto qqEbd; qqEbd: y3IKL: goto VkPbT; m8Bwm: $thn = $smt->id_smt == "\61" ? $tahun[0] : $tahun[1]; goto vP4Ky; rLKLg: goto Admio; goto BfFYf; TGW1g: $smt = $this->dashboard->getSemesterActive(); goto jfZHU; EIFjD: $this->load->view("\x6b\145\x6c\141\x73\57\155\141\164\145\162\151\x6a\x61\x64\167\141\154\x2f\144\x61\x74\x61"); goto r3ulS; aJfYj: $data["\x74\150\156\x5f\163\x65\154\x65\143\164\x65\x64"] = $tp->tahun; goto yUgO0; UYb9q: $data["\x67\x75\x72\x75"] = $guru; goto FkJuD; KEquF: if ($this->ion_auth->is_admin()) { goto pANOZ; } goto j5NIL; PnPAI: $this->load->view("\x6b\145\x6c\141\x73\57\155\141\x74\145\x72\x69\152\x61\144\x77\141\x6c\57\144\141\x74\x61"); goto U7ZsM; MNZyN: $tahun = explode("\57", $tp->tahun ?? ''); goto m8Bwm; jAIqK: $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\x65\x73\57\144\141\x73\150\142\157\x61\x72\x64\x2f\x5f\x68\145\141\x64\145\x72", $data); goto PnPAI; XYxPp: $data["\160\162\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto jAIqK; GfeSQ: $data["\x73\155\x74\x5f\x61\x63\164\151\166\x65"] = $smt; goto SMgum; r3ulS: $this->load->view("\x6d\145\x6d\x62\145\162\x73\x2f\x67\165\x72\x75\57\164\x65\155\x70\x6c\141\x74\x65\x73\x2f\x66\157\x6f\x74\145\x72"); goto B1jS0; mjqZL: $data["\x69\144\x5f\x6b\x65\154\x61\x73"] = "\60"; goto D4scq; BfFYf: pANOZ: goto XYxPp; j5NIL: if ($this->ion_auth->in_group("\x67\x75\162\165")) { goto y3IKL; } goto rLKLg; Q6xWK: $data["\163\155\164"] = $this->dashboard->getSemester(); goto GfeSQ; NOICH: $data["\x74\x70\137\x61\143\164\x69\166\x65"] = $tp; goto Q6xWK; VkPbT: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto UYb9q; yUgO0: $bln = $smt->id_smt == "\x31" ? "\x37" : "\x31"; goto MNZyN; SMgum: $data["\x6b\x65\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto mjqZL; vP4Ky: $data["\x62\154\x6e\x5f\x73\145\154\145\x63\164\x65\x64"] = $bln; goto CHVsy; B1jS0: Admio: goto j1cKs; oWlgT: $data["\152\x6d\x6c\111\163\x74"] = []; goto zwnn6; zwnn6: $data["\x6a\x6d\154\115\141\160\145\154"] = []; goto aJfYj; j1cKs: } public function kelas() { goto vAe7S; vAe7S: $tahun = $this->input->get("\164\141\150\x75\156"); goto s3mgF; Wn27M: $data["\144\145\x74\141\151\x6c\x5f\x6a\141\x64\167\x61\x6c\137\155\141\x74\145\162\x69"] = isset($semua_materi[1]) ? $semua_materi[1] : []; goto ExmUW; JyZR2: goto tWw9b; goto FmkMR; wX0iW: $data["\152\x61\144\x77\x61\154\x5f\x6d\x61\x70\x65\x6c"] = $jadwal_mapel; goto IRT2m; OOg53: $data["\160\162\x6f\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto rTsXj; DSeal: VDNqA: goto dxhE4; WxnzB: $tp = $this->dashboard->getTahunActive(); goto THFx6; sm_BU: $user = $this->ion_auth->user()->row(); goto ZIhuL; SgU2G: jHxU3: goto P7gXs; o3Hhz: $jadwal_mapel[] = ["\152\141\144\167\141\x6c" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto DSeal; tOQW2: $data["\164\x70\x5f\141\143\x74\151\x76\145"] = $tp; goto tmWKf; TdYna: $this->load->view("\137\x74\x65\155\160\x6c\x61\164\x65\163\57\x64\141\163\x68\142\x6f\x61\162\144\x2f\137\146\x6f\157\x74\145\162"); goto b1sHh; KVWv3: KkjFj: goto jB14w; HX2Cl: $i = 0; goto HM8MC; RcLeD: goto u4_tO; goto KVWv3; Ora44: $this->load->view("\155\x65\x6d\142\145\x72\x73\57\147\165\x72\x75\57\164\145\155\160\x6c\x61\x74\x65\x73\57\x68\x65\141\x64\145\x72", $data); goto FYsM9; py8Fv: $data["\163\155\164\137\x61\x63\x74\151\x76\145"] = $smt; goto cL3VH; tIR6V: $kelas = $this->input->get("\x6b\145\x6c\x61\x73"); goto VxQ8z; P7gXs: $data["\147\x75\x72\165"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Ora44; tmWKf: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto py8Fv; v1g_O: $data["\x64\141\x74\x65\x5f\x73\x65\154\x65\143\x74\145\144"] = $date; goto NLnWk; nWp7p: $semua_materi = $this->kelas->getAllJadwalMateriByKelas($tp->id_tp, $smt->id_smt); goto Wn27M; WhzEG: if ($this->ion_auth->is_admin()) { goto yjE7j; } goto fUqaT; G0zi1: if ($jadk == null) { goto KkjFj; } goto ksHnV; AKWn2: $data["\x6d\x65\164\150\157\144"] = "\x61\x64\144"; goto nodHN; ksHnV: $data["\152\x61\144\x77\x61\154\x5f\153\x62\x6d"] = $jadk; goto RcLeD; zUyBm: if ($jadm == null) { goto tww4D; } goto gf1CP; qCIYQ: $data["\x74\x70"] = $this->dashboard->getTahun(); goto tOQW2; ExmUW: $data["\x64\145\164\141\151\x6c\137\152\141\x64\167\141\x6c\137\164\165\147\141\x73"] = isset($semua_materi[2]) ? $semua_materi[2] : []; goto WhzEG; THFx6: $smt = $this->dashboard->getSemesterActive(); goto qCIYQ; gf1CP: foreach ($jadm as $j) { $jadwal_mapel[] = ["\x6a\141\x64\167\141\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; bkHFu: } goto FH3tf; FH3tf: zQdbg: goto DhG4l; fUqaT: if ($this->ion_auth->in_group("\147\165\162\165")) { goto jHxU3; } goto uoJIA; VvH75: $data["\164\x68\156\x5f\163\145\x6c\145\143\164\x65\144"] = $tahun; goto FbDa1; cL3VH: $data["\x6b\145\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Lh255; mC0x8: yjE7j: goto OOg53; zKt9c: $data["\x69\x64\137\153\x65\154\141\x73"] = $kelas; goto WO8sU; rTsXj: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\x74\145\163\x2f\x64\141\x73\x68\x62\157\x61\x72\x64\x2f\x5f\150\x65\141\x64\x65\x72", $data); goto SvzNa; SvzNa: $this->load->view("\153\x65\154\x61\x73\57\x6d\x61\x74\x65\162\151\x6a\141\144\x77\x61\154\57\144\x61\164\x61"); goto TdYna; Lh255: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto G0zi1; s3mgF: $bulan = $this->input->get("\142\165\x6c\x61\156"); goto tIR6V; fU3x3: $this->load->view("\155\145\x6d\142\x65\162\x73\x2f\x67\x75\162\x75\x2f\164\145\x6d\x70\x6c\141\164\145\163\x2f\146\x6f\x6f\x74\x65\162"); goto Rp3AD; IRT2m: $data["\155\x61\x70\145\x6c\163"] = $this->master->getAllMapel(); goto Aa8R3; b1sHh: goto Jjt4L; goto SgU2G; HM8MC: KzCfq: goto hDFVe; xR_6A: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto zUyBm; Aa8R3: $week = [date("\131\55\155\55\144", strtotime("\x6d\157\x6e\144\141\171\x20\164\150\x69\163\40\x77\145\145\153", strtotime($date))), date("\x59\55\155\55\144", strtotime("\x74\x75\145\163\x64\141\171\40\164\150\x69\x73\x20\x77\145\x65\x6b", strtotime($date))), date("\x59\55\x6d\x2d\x64", strtotime("\167\x65\x64\156\145\163\144\x61\171\40\x74\x68\x69\163\x20\x77\x65\145\x6b", strtotime($date))), date("\x59\x2d\155\55\x64", strtotime("\164\x68\165\x72\x73\x64\x61\x79\40\x74\x68\x69\163\40\167\145\145\x6b", strtotime($date))), date("\131\x2d\x6d\x2d\144", strtotime("\146\162\x69\144\x61\171\40\164\x68\151\163\40\x77\x65\145\153", strtotime($date))), date("\x59\55\x6d\55\x64", strtotime("\163\141\164\x75\162\x64\x61\171\40\164\x68\151\x73\40\x77\x65\x65\x6b", strtotime($date)))]; goto VvH75; FmkMR: tww4D: goto HX2Cl; hDFVe: if (!($i < $jml_mapel)) { goto zzmpz; } goto o3Hhz; nodHN: tWw9b: goto wX0iW; ccYQu: u4_tO: goto zKt9c; VxQ8z: $date = $this->input->get("\144\x61\164\145"); goto sm_BU; FYsM9: $this->load->view("\x6b\145\x6c\141\163\57\155\141\x74\x65\x72\x69\152\141\144\167\x61\154\x2f\x64\141\164\x61"); goto fU3x3; WO8sU: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto xR_6A; FbDa1: $data["\142\154\x6e\137\x73\145\x6c\145\x63\164\145\144"] = $bulan; goto v1g_O; ptuCq: $data["\x6f\x70\163\151\x5f\155\x61\164\x65\162\151"] = $this->kelas->getAllMateriByKelas($tp->id_tp, $smt->id_smt); goto nWp7p; ZIhuL: $setting = $this->dashboard->getSetting(); goto tuT1x; uoJIA: goto Jjt4L; goto mC0x8; tuT1x: $data = ["\x75\x73\145\x72" => $user, "\152\165\144\x75\154" => "\112\x61\144\167\x61\x6c\40\115\141\x74\145\162\x69\40\x2f\40\x54\x75\147\x61\x73", "\x73\x75\x62\152\165\144\x75\154" => "\x53\x65\x74\x20\112\141\x64\167\x61\x6c\x20\x4d\x61\164\145\x72\151\40\57\40\124\x75\x67\x61\163", "\x73\x65\164\x74\x69\156\x67" => $setting]; goto WxnzB; jB14w: $data["\152\141\x64\167\141\154\137\153\142\x6d"] = json_decode(json_encode(["\x69\144\x5f\x74\160" => $tp->tahun, "\x69\x64\x5f\x73\155\164" => $smt->smt, "\x69\x64\137\x6b\145\x6c\x61\163" => $kelas, "\x6b\x62\155\137\x6a\x61\x6d\137\x70\x65\x6c" => '', "\153\142\155\x5f\152\x61\x6d\x5f\155\165\x6c\141\151" => '', "\x6b\142\x6d\137\x6a\x6d\154\137\155\141\x70\x65\x6c\x5f\150\x61\162\x69" => '', "\151\163\164\151\162\141\x68\141\164" => serialize([]), "\x61\144\x61" => false])); goto ccYQu; VimdS: zzmpz: goto AKWn2; bkfWJ: goto KzCfq; goto VimdS; NLnWk: $data["\x77\145\145\153"] = $week; goto ptuCq; dxhE4: $i++; goto bkfWJ; Rp3AD: Jjt4L: goto Pdamz; DhG4l: $data["\155\x65\164\150\157\x64"] = "\x65\x64\x69\164"; goto JyZR2; Pdamz: } public function setJadwal() { goto glRj8; f7CGi: $istirahat[] = ["\x69\163\x74" => $jamke, "\144\165\x72" => $durasi]; goto okOxT; a7bkw: $this->output_json($data); goto lViub; iusuq: ch458: goto d0Ty_; glRj8: $istirahat = []; goto PIPJI; d0Ty_: $id_tp = $this->master->getTahunActive()->id_tp; goto h91Y3; AX3F2: $id_kelas = $this->input->post("\x69\144\137\x6b\x65\x6c\x61\163", true); goto lX8zt; Tc1CW: if (!$jamke) { goto m6HqD; } goto f7CGi; lX8zt: $insert = ["\151\144\x5f\153\142\155" => $id_tp . $id_smt . $id_kelas, "\x69\x64\137\x74\160" => $id_tp, "\x69\144\137\163\155\x74" => $id_smt, "\151\144\x5f\153\x65\x6c\141\163" => $id_kelas, "\153\142\x6d\137\152\141\x6d\137\x70\x65\x6c" => $this->input->post("\x6a\x61\155\137\155\x61\x70\x65\154", true), "\x6b\142\x6d\x5f\152\x61\155\x5f\155\165\x6c\x61\x69" => $this->input->post("\152\141\x6d\137\155\x75\154\x61\x69", true), "\x6b\142\155\137\152\x6d\x6c\137\x6d\141\x70\145\154\x5f\150\141\162\151" => $this->input->post("\x6a\155\x6c\137\x6d\x61\x70\x65\x6c", true), "\x69\163\x74\x69\162\141\x68\x61\x74" => serialize($istirahat)]; goto JGyr1; uvEgq: $i++; goto t9c4C; vh600: $jamke = $this->input->post("\x69\163\x74" . $i, true); goto AsBdb; okOxT: m6HqD: goto GWZE6; JGyr1: $update = $this->db->replace("\153\145\154\141\x73\137\152\141\x64\167\x61\154\137\x6b\x62\155", $insert); goto IoVDJ; IoVDJ: $this->logging->saveLog(3, "\155\x65\x72\165\142\141\x68\40\152\x61\x64\167\x61\154\40\160\x65\154\141\x6a\x61\x72\141\156"); goto dVJgl; PIPJI: $i = 1; goto axqZn; dVJgl: $data["\163\x74\x61\x74\165\163"] = $update; goto a7bkw; CvBtP: if (!($i < 5)) { goto ch458; } goto vh600; t9c4C: goto ZMd7R; goto iusuq; axqZn: ZMd7R: goto CvBtP; h91Y3: $id_smt = $this->master->getSemesterActive()->id_smt; goto AX3F2; AsBdb: $durasi = $this->input->post("\144\165\162\137\151\163\x74" . $i, true); goto Tc1CW; GWZE6: xcWY6: goto uvEgq; lViub: } public function setMapel() { goto VF995; ECMcq: foreach ($input as $d) { goto AFLjD; AFLjD: $data = ["\x69\x64\137\x6a\141\144\167\x61\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\137\164\x70" => $d->id_tp, "\x69\144\x5f\163\155\164" => $d->id_smt, "\151\x64\x5f\x6b\x65\x6c\141\163" => $id_kelas, "\151\x64\137\x68\x61\162\151" => $d->id_hari, "\x6a\x61\x6d\x5f\x6b\145" => $d->jam_ke, "\151\144\x5f\x6d\x61\x70\x65\154" => $d->id_mapel]; goto L9b0c; L9b0c: $update = $this->db->replace("\x6b\x65\x6c\141\x73\x5f\x6a\141\x64\x77\141\154\x5f\x6d\141\x70\x65\x6c", $data); goto yxZMG; yxZMG: v7jx7: goto goLvL; goLvL: } goto V081K; Up2zU: $res["\x73\x74\x61\x74\165\x73"] = $update; goto QeIFu; V081K: lZ2Nw: goto Up2zU; VF995: $input = json_decode($this->input->post("\x64\x61\x74\x61", true)); goto T1Lc_; T1Lc_: $id_kelas = $this->input->post("\151\x64\x5f\x6b\145\154\x61\163", true); goto ECMcq; QeIFu: $this->output_json($res); goto rMfFZ; rMfFZ: } public function saveJadwal() { goto ieuSF; EMEO1: w5X0F: goto Wg_uQ; FZr4d: $this->output_json($update); goto x8rgK; ieuSF: $input_materi = json_decode($this->input->post("\x6d\x61\x74\145\162\151", true)); goto n3yUk; GLS1s: kCVo7: goto sdupP; sdupP: foreach ($input_tugas as $im) { goto Jp_pV; Jp_pV: $insert = ["\152\145\x6e\151\x73" => "\62", "\151\144\137\x6b\152\155" => $im->id_kjm, "\x69\x64\137\x74\160" => $im->id_tp, "\151\144\137\163\x6d\164" => $im->id_smt, "\151\x64\x5f\153\x65\154\141\163" => $im->id_kelas, "\151\144\x5f\x6d\141\x74\145\x72\151" => $im->id_materi, "\x69\144\137\x6d\x61\160\145\154" => $im->id_mapel, "\x6a\141\x64\167\141\154\x5f\x6d\141\164\x65\162\x69" => $im->jadwal_materi]; goto hd4EQ; ng1g8: kpOKe: goto R2KSU; hd4EQ: $update = $this->db->replace("\153\145\154\x61\163\137\152\x61\144\167\x61\x6c\137\x6d\141\x74\x65\x72\x69", $insert); goto ng1g8; R2KSU: } goto EMEO1; Wg_uQ: $this->logging->saveLog(3, "\x6d\x65\x72\x75\142\141\x68\40\152\141\144\x77\141\154\40\x6d\x61\164\145\162\151\40\144\141\x6e\40\164\x75\x67\141\163"); goto FZr4d; LQ5Sy: foreach ($input_materi as $im) { goto A9CUA; O5jWB: gKzZP: goto xGRvE; A9CUA: $insert = ["\x6a\145\x6e\151\x73" => "\x31", "\151\x64\137\x6b\x6a\155" => $im->id_kjm, "\x69\144\x5f\x74\160" => $im->id_tp, "\x69\144\137\163\x6d\x74" => $im->id_smt, "\151\x64\x5f\153\145\154\x61\163" => $im->id_kelas, "\x69\144\x5f\155\141\164\145\162\x69" => $im->id_materi, "\x69\144\x5f\x6d\x61\x70\x65\x6c" => $im->id_mapel, "\x6a\x61\x64\167\x61\x6c\x5f\x6d\141\x74\x65\162\x69" => $im->jadwal_materi]; goto VNCdx; VNCdx: $update = $this->db->replace("\153\x65\x6c\x61\x73\x5f\152\141\144\167\x61\x6c\x5f\155\141\164\145\x72\x69", $insert); goto O5jWB; xGRvE: } goto GLS1s; n3yUk: $input_tugas = json_decode($this->input->post("\164\165\x67\141\163", true)); goto LQ5Sy; x8rgK: } }
