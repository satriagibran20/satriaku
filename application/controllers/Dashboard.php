<?php
/*   ________________________________________
    |                 satriaCBT              |
    |    https://github.com/satriacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\x50\101\124\110") or exit("\x4e\x6f\x20\x64\x69\x72\x65\x63\164\40\163\143\x72\151\x70\x74\x20\x61\143\143\x65\x73\x73\40\x61\154\x6c\x6f\167\x65\144"); class Dashboard extends CI_Controller { public function __construct() { goto Ul7IH; qSRDf: if ($this->ion_auth->logged_in()) { goto VpGgl; } goto e3Iqc; e3Iqc: redirect("\x61\165\164\x68"); goto y4FjW; RXx0R: $this->load->model("\x44\x61\x73\150\x62\x6f\x61\162\144\137\x6d\x6f\144\145\x6c", "\x64\141\x73\150\x62\157\141\x72\144"); goto DKxBQ; DKxBQ: $this->load->model("\114\157\x67\137\155\157\x64\145\154", "\x6c\x6f\x67\147\151\x6e\x67"); goto imLqe; y4FjW: VpGgl: goto ufQlT; ufQlT: $this->load->model("\x4d\141\x73\164\x65\162\x5f\x6d\157\x64\145\x6c", "\x6d\x61\163\x74\x65\162"); goto RXx0R; KPKnQ: $this->load->model("\103\142\164\137\x6d\x6f\144\145\154", "\x63\x62\164"); goto ON9PU; imLqe: $this->load->model("\x44\162\x6f\x70\144\x6f\167\x6e\137\x6d\157\x64\x65\x6c", "\x64\162\x6f\x70\144\x6f\x77\x6e"); goto KPKnQ; Ul7IH: parent::__construct(); goto qSRDf; ON9PU: } public function admin_box($setting, $tp, $smt) { goto Ht2T8; Ht2T8: $where = ''; goto KtXyH; lwgHI: ue8ex: goto H9Gyd; ifsy2: return $info_box; goto VTQvn; nWkrX: j7V_O: goto iyePm; Ugtf0: goto ue8ex; goto nWkrX; Qtb4R: if ($setting->jenjang == "\x32") { goto StHuI; } goto Ugtf0; KtXyH: if ($setting->jenjang == "\61") { goto j7V_O; } goto Qtb4R; H9Gyd: $box = [["\142\157\x78" => "\142\154\165\145", "\x74\x6f\x74\141\x6c" => $this->dashboard->total("\155\x61\x73\x74\145\x72\x5f\x73\x69\x73\x77\141"), "\x74\151\164\154\x65" => "\x53\151\x73\167\x61", "\165\162\x6c" => "\144\141\x74\x61\163\151\x73\x77\x61", "\151\x63\x6f\x6e" => "\x75\163\x65\x72\163"], ["\142\x6f\170" => "\143\171\x61\x6e", "\x74\157\x74\141\154" => $this->dashboard->total("\155\141\163\x74\x65\162\x5f\x6b\145\154\141\163", "\x69\x64\137\x74\x70\x3d" . $tp . "\x20\101\x4e\104\x20\x69\144\x5f\163\x6d\164\x3d" . $smt), "\x74\151\164\154\145" => "\x52\157\155\x62\x65\154", "\165\162\x6c" => "\x64\x61\x74\141\153\x65\154\141\x73", "\x69\x63\157\156" => "\x62\145\x6c\154"], ["\x62\x6f\170" => "\x74\x65\x61\x6c", "\164\x6f\164\141\x6c" => $this->dashboard->total("\x6d\x61\x73\x74\145\162\x5f\147\165\x72\165"), "\x74\151\164\x6c\145" => "\107\x75\x72\165", "\x75\x72\154" => "\x64\x61\x74\x61\147\x75\162\165", "\x69\x63\157\x6e" => "\165\163\145\162"], ["\142\x6f\x78" => "\146\165\x63\150\x73\151\141", "\x74\x6f\x74\x61\154" => $this->dashboard->totalWaliKelas($tp, $smt), "\x74\151\164\x6c\x65" => "\x57\141\154\151\x20\x4b\145\x6c\x61\163", "\x75\x72\154" => "\144\141\x74\x61\x67\165\162\165", "\151\143\157\156" => "\165\163\x65\x72"], ["\142\x6f\170" => "\163\x75\x63\143\145\163\x73", "\164\x6f\x74\141\154" => $this->dashboard->total("\155\141\x73\x74\145\162\137\155\x61\x70\145\x6c", $where), "\x74\151\x74\154\145" => "\x4d\x61\x70\145\x6c", "\165\162\x6c" => "\144\x61\x74\141\x6d\141\x70\145\154", "\151\x63\x6f\x6e" => "\142\x6f\157\x6b"], ["\x62\157\170" => "\171\x65\154\154\157\167", "\164\157\164\x61\x6c" => $this->dashboard->total("\x6d\141\x73\x74\145\x72\x5f\145\x6b\163\x74\162\141"), "\164\151\164\154\x65" => "\105\x6b\x73\x74\162\x61\153\165\x72\151\153\165\154\145\162", "\165\162\x6c" => "\x64\141\x74\x61\145\x6b\x73\x74\162\x61", "\151\x63\x6f\x6e" => "\x62\157\157\x6b"]]; goto RgP1e; r3fA6: goto ue8ex; goto m78Nz; iyePm: $where = "\152\145\x6e\x6a\141\156\147\x3d\60\x20\x4f\x52\40\x6a\x65\156\152\141\156\147\75\x31"; goto r3fA6; m78Nz: StHuI: goto YY2XU; YY2XU: $where = "\152\x65\156\x6a\141\156\x67\75\62\x20\x4f\122\x20\x6a\145\156\152\x61\156\147\75\x31"; goto lwgHI; RgP1e: $info_box = json_decode(json_encode($box), FALSE); goto ifsy2; VTQvn: } public function guru_box($setting) { goto V_Trx; VmqWD: $where = "\152\x65\x6e\152\141\156\x67\x3d\x30\x20\x4f\122\x20\x6a\145\x6e\x6a\x61\x6e\x67\x3d\x31"; goto WbUN1; iusN4: $info_box = json_decode(json_encode($box), FALSE); goto v3Nhc; v3Nhc: return $info_box; goto VJ7Z2; vu8vM: if ($setting->jenjang == "\x31") { goto nreuS; } goto gKObb; gKObb: if ($setting->jenjang == "\x32") { goto xFh00; } goto QNaTz; V_Trx: $where = ''; goto vu8vM; FMcb7: $box = [["\x62\x6f\x78" => "\164\145\x61\154", "\x74\x6f\x74\141\x6c" => $this->dashboard->total("\x6d\x61\163\164\x65\162\137\153\145\x6c\x61\163"), "\164\151\164\x6c\x65" => "\x52\157\x6d\x62\x65\x6c", "\x69\143\x6f\x6e" => "\165\x73\145\x72"], ["\x62\x6f\x78" => "\142\154\165\x65", "\164\157\164\141\x6c" => $this->dashboard->total("\x6d\141\x73\x74\x65\162\x5f\x73\x69\163\x77\141"), "\164\151\x74\154\x65" => "\x53\151\163\167\141", "\x69\143\157\156" => "\x75\163\x65\162\163"], ["\142\157\x78" => "\146\x75\x63\150\163\151\141", "\x74\157\164\x61\x6c" => $this->dashboard->total("\x6d\141\163\x74\x65\x72\x5f\x67\x75\162\x75"), "\164\x69\x74\154\x65" => "\x47\165\162\x75", "\151\x63\157\x6e" => "\x75\x73\145\162"], ["\142\157\x78" => "\163\165\143\143\x65\163\x73", "\164\x6f\164\141\x6c" => $this->dashboard->total("\155\141\163\x74\x65\162\137\x6d\x61\160\x65\x6c", $where), "\164\151\x74\154\x65" => "\115\x61\160\145\154", "\151\143\x6f\156" => "\142\157\157\x6b"]]; goto iusN4; t7SWH: svITP: goto FMcb7; QNaTz: goto svITP; goto CObyf; EWP1u: $where = "\x6a\145\x6e\x6a\141\x6e\x67\x3d\x32\40\117\122\40\152\x65\x6e\x6a\x61\x6e\x67\75\x31"; goto t7SWH; CObyf: nreuS: goto VmqWD; wmbjX: xFh00: goto EWP1u; WbUN1: goto svITP; goto wmbjX; VJ7Z2: } public function ujian_box() { goto CQ7aF; ab2Ab: $info_box = json_decode(json_encode($box), FALSE); goto YH7o5; YH7o5: return $info_box; goto sWihh; CQ7aF: $box = [["\142\157\x78" => "\x69\x6e\x64\x69\x67\157", "\x74\x6f\164\141\x6c" => $this->dashboard->total("\143\x62\x74\137\x72\165\x61\156\x67"), "\x74\x69\x74\x6c\145" => "\122\165\141\156\x67\x20\125\152\151\141\x6e", "\x75\162\x6c" => "\143\x62\164\162\165\141\x6e\147", "\151\x63\x6f\156" => "\x73\143\x68\157\157\x6c"], ["\142\x6f\x78" => "\155\x61\162\x6f\157\x6e", "\x74\x6f\164\x61\154" => $this->dashboard->total("\x63\142\x74\x5f\x73\x65\x73\x69"), "\x74\x69\164\154\x65" => "\123\x65\x73\151", "\x75\162\154" => "\x63\142\164\163\x65\163\x69", "\x69\143\157\156" => "\x63\x6c\157\143\153"], ["\x62\x6f\170" => "\x67\162\x65\x65\x6e", "\x74\157\164\x61\154" => $this->dashboard->total("\143\x62\164\x5f\x62\x61\156\x6b\137\163\x6f\x61\154"), "\x74\x69\164\x6c\145" => "\x42\141\x6e\x6b\40\123\x6f\141\154", "\x75\162\x6c" => "\x63\142\x74\x62\x61\156\x6b\163\x6f\141\x6c", "\151\143\x6f\x6e" => "\x66\157\154\x64\145\x72"], ["\142\157\x78" => "\x74\145\141\154", "\164\x6f\x74\141\154" => $this->dashboard->totalJadwal(), "\164\x69\164\x6c\145" => "\112\x61\x64\x77\x61\x6c", "\x75\x72\154" => "\x63\142\164\x6a\x61\x64\167\141\x6c", "\151\143\157\x6e" => "\143\x6c\157\143\x6b"]]; goto ab2Ab; sWihh: } public function menu_siswa_box() { goto kZYY6; jYhJX: $info_box = json_decode(json_encode($box), FALSE); goto zd3Wm; kZYY6: $box = [["\164\151\x74\x6c\x65" => "\112\x61\144\x77\141\x6c\x20\120\x65\x6c\141\x6a\x61\x72\141\x6e", "\151\143\x6f\x6e" => "\151\x63\x5f\x6f\x6e\154\151\x6e\145\56\x70\156\147", "\x6c\x69\x6e\x6b" => "\x73\x69\163\x77\141\x2f\152\x61\x64\167\141\154\160\x65\x6c\x61\152\141\x72\x61\156"], ["\x74\151\x74\154\145" => "\x4d\x61\164\145\162\151", "\x69\x63\x6f\156" => "\151\x63\x5f\x65\x6c\145\141\162\156\x69\x6e\x67\56\x70\x6e\x67", "\x6c\151\156\153" => "\x73\151\163\167\141\57\155\141\x74\x65\x72\x69"], ["\164\x69\164\154\145" => "\124\x75\147\x61\163", "\x69\x63\x6f\156" => "\x69\143\137\x71\165\145\x73\x74\151\157\x6e\x73\56\x70\156\x67", "\x6c\x69\156\x6b" => "\163\151\x73\x77\141\57\164\165\x67\x61\163"], ["\x74\x69\x74\x6c\x65" => "\x55\x6a\151\141\x6e\x20\57\40\x55\154\141\156\x67\x61\156", "\151\143\x6f\156" => "\151\143\137\161\x75\x65\163\x74\x69\157\x6e\x2e\x70\156\x67", "\x6c\151\x6e\153" => "\163\x69\163\x77\141\57\143\142\x74"], ["\164\151\x74\154\145" => "\x4e\x69\x6c\141\151\x20\x48\x61\163\x69\x6c", "\x69\x63\x6f\156" => "\x69\x63\137\145\170\x61\x6d\56\x70\x6e\x67", "\x6c\151\156\153" => "\x73\x69\163\x77\141\x2f\150\141\163\x69\x6c"], ["\164\151\x74\154\145" => "\x41\x62\163\145\156\x73\x69", "\151\143\x6f\156" => "\151\143\137\x63\x6c\x69\160\x62\x6f\141\162\144\56\160\x6e\147", "\154\x69\x6e\153" => "\163\x69\163\x77\141\57\153\145\x68\x61\x64\151\162\x61\156"], ["\x74\x69\x74\x6c\x65" => "\x43\x61\x74\141\164\141\x6e\x20\107\x75\162\x75", "\151\x63\x6f\x6e" => "\x69\x63\137\x73\x74\165\144\145\156\164\x2e\160\x6e\147", "\x6c\x69\x6e\153" => "\x73\151\163\167\x61\x2f\x63\x61\x74\141\x74\141\156"]]; goto jYhJX; zd3Wm: return $info_box; goto mzcY2; mzcY2: } public function index() { goto rBZyN; atEUv: $this->load->view("\x64\x69\x73\141\x62\154\145\x5f\x6c\157\147\151\156", $data); goto tVYOD; s4_Pt: $data["\164\160\137\141\143\x74\x69\166\145"] = $tp; goto aRJrf; sVjKw: $data["\152\x61\144\x77\x61\154\163"] = $arrJadwalKelas[$siswa->id_kelas] ?? []; goto IKEBO; WlEAi: goto g6Wl3; goto NyXLV; mgeAf: $data["\155\145\x6e\x75"] = $this->menu_siswa_box(); goto wjBb2; kwaCI: Tw_wq: goto txM76; F_9B5: g6Wl3: goto PLFl3; NabKA: ZuXDW: goto ciSze; qAH2D: $this->load->view("\x64\141\163\x68\142\x6f\141\x72\x64"); goto D7bfY; qsnA1: $tkn["\152\x61\x72\x61\153"] = "\61"; goto l527C; ukmCm: $this->load->view("\155\145\x6d\x62\x65\x72\x73\57\147\165\162\165\x2f\x64\x61\163\x68\142\157\x61\x72\144"); goto mwvIC; DI1Ru: $data["\x6b\142\x6d\163"] = $arrKbm; goto mnLW2; tdqKq: oy7eP: goto atEUv; Zb0Cn: if ($guru == null) { goto i3oKw; } goto qyYX0; UYzH1: $data["\x6c\157\x67\x69\x6e"] = $siswa; goto c5snQ; YqqkN: $tkn["\x61\165\x74\157"] = "\x30"; goto qsnA1; bE1P1: ldjqx: goto WlEAi; J3bDy: $data["\147\165\162\165\163"] = $this->dropdown->getAllGuru(); goto J90Ks; cCAaY: if (!($tp != null)) { goto GbfNE; } goto Zqvi5; mwvIC: $this->load->view("\155\145\155\x62\x65\162\163\57\147\165\162\x75\57\x74\x65\155\x70\x6c\x61\164\145\x73\x2f\146\157\157\x74\x65\x72"); goto heI6W; heI6W: goto g4Mwg; goto YKDFi; cREOV: foreach ($tglJadwals as $tgl => $jadwalss) { goto KIuIC; KIuIC: foreach ($jadwalss as $mpl => $jadwals) { goto t6HBk; IUnJt: cNjKp: goto KpcBp; KpcBp: vVPDZ: goto F0Wz3; t6HBk: foreach ($jadwals as $jadwal) { goto r1Nrb; r1Nrb: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas); goto Q03Qc; srWHl: zubwu: goto M__xo; M__xo: n4Bvc: goto Tnne_; Q03Qc: foreach ($jadwal->bank_kelas as $kb) { goto yAgw9; E1SZ7: $jadwal->peserta[] = $p; goto OhRW6; MeQ_Q: V8ARJ: goto vtO00; yAgw9: if (!($kb["\x6b\x65\154\x61\x73\137\x69\144"] != '')) { goto GFoVr; } goto AJxLy; OhRW6: GFoVr: goto MeQ_Q; AJxLy: $p = $this->cbt->getKelasUjian($kb["\x6b\x65\x6c\141\x73\x5f\x69\144"]); goto E1SZ7; vtO00: } goto srWHl; Tnne_: } goto IUnJt; F0Wz3: } goto AC_sA; AC_sA: kLUuZ: goto fAqDy; fAqDy: ocOLg: goto wdb58; wdb58: } goto midPf; I2Fjt: if ($siswa == null) { goto oy7eP; } goto UYzH1; l527C: $tkn["\145\154\141\x70\x73\x65\144"] = "\x30\60\72\60\60\72\60\x30"; goto ZmFAS; rR3d7: $token = $this->cbt->getToken(); goto a_TPC; tVYOD: UCwOk: goto F_9B5; xt0MG: $this->load->view("\144\151\x73\x61\142\154\x65\137\154\x6f\x67\x69\x6e", $data); goto Q3MBu; aRJrf: $data["\163\155\164"] = $this->dashboard->getSemester(); goto NT6PK; txM76: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Zb0Cn; rO_vY: $this->load->view("\137\x74\145\155\160\154\141\x74\x65\x73\57\144\x61\x73\x68\x62\157\x61\162\x64\57\x5f\150\145\x61\144\145\x72", $data); goto qAH2D; xFpzG: $this->load->view("\x6d\x65\155\x62\x65\162\x73\x2f\x67\165\x72\165\57\164\145\x6d\x70\x6c\x61\164\x65\163\57\150\x65\141\x64\x65\x72", $data); goto ukmCm; IKEBO: $data["\x72\x75\x6e\156\151\x6e\147\x5f\164\145\170\164"] = $this->dashboard->getRunningText(); goto M4Igt; ZmFAS: $data["\x74\157\153\145\156"] = $token != null ? $token : json_decode(json_encode($tkn)); goto L58e8; QSZb_: $data["\x70\162\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto rO_vY; Zqvi5: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto olSeG; VVkMQ: if ($this->ion_auth->in_group("\x73\x69\163\167\x61")) { goto ilkNy; } goto rR3d7; ZU2M4: $tp = $this->dashboard->getTahunActive(); goto HOC3E; hm6WI: $data["\x75\x6a\x69\x61\x6e\x5f\142\x6f\170"] = $this->ujian_box(); goto QSZb_; HOC3E: $smt = $this->dashboard->getSemesterActive(); goto AbFlg; AbFlg: $data["\x74\160"] = $this->dashboard->getTahun(); goto s4_Pt; oblbw: $data["\x75\x6a\x69\141\156\x5f\142\157\170"] = $this->ujian_box(); goto d6pfq; BawJl: $user = $this->ion_auth->user()->row(); goto Cc9Cy; C5igC: goto ldjqx; goto QqPGT; D7bfY: $this->load->view("\137\164\x65\x6d\x70\x6c\141\164\x65\163\x2f\144\141\x73\150\142\x6f\x61\162\144\x2f\x5f\146\x6f\x6f\x74\145\x72"); goto QjcyH; mnLW2: $data["\155\141\160\145\154\163"] = $this->master->getAllMapel(); goto nTnW9; qyYX0: $data["\151\x6e\x66\157\x5f\x62\157\x78"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt); goto oblbw; GC0f5: $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt); goto I2Fjt; l1p8s: $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt); goto uVNKe; ciSze: $arrJadwalKelas = []; goto Wy3v7; sLhns: $data["\x6a\141\144\167\141\154\x73"] = $arrJadwalKelas; goto DI1Ru; rBZyN: $setting = $this->dashboard->getSetting(); goto BawJl; kTedZ: $kelass = []; goto cCAaY; L58e8: $data["\141\x64\141\137\x75\152\x69\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\155\x2d\144")); goto sLhns; nPf3L: $data["\162\165\x61\156\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto J3bDy; QqPGT: cBpGb: goto kECju; Wy3v7: foreach ($jadwal as $key => $item) { $arrJadwalKelas[$item->id_kelas][$item->jam_ke] = $item; RPrjr: } goto Pguyi; d6pfq: $data["\x67\165\x72\165"] = $guru; goto xFpzG; uVNKe: foreach ($kbms as $kbm) { $kbm->istirahat = unserialize($kbm->istirahat); nYf0Z: } goto NabKA; midPf: jDxfm: goto Q12bW; kECju: $data["\x69\x6e\146\157\137\142\x6f\x78"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt); goto hm6WI; Pguyi: QoWAz: goto Oq1bU; zOeWL: $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day); goto l1p8s; kGr4s: $data["\153\145\154\141\163\x65\x73"] = $kelass; goto IunIf; c5snQ: $data["\x73\151\x73\x77\141"] = $siswa; goto mgeAf; Q3MBu: g4Mwg: goto bE1P1; MpBtx: foreach ($kbms as $key => $item) { $arrKbm[$item->id_kelas] = $item; VMeWO: } goto O0H5k; rIVlN: $data["\x70\145\156\147\141\x77\x61\x73"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, null, null); goto nPf3L; wjBb2: $data["\x6b\142\x6d\163"] = $arrKbm[$siswa->id_kelas] ?? null; goto sVjKw; EIrMh: if ($this->ion_auth->in_group("\147\165\162\x75")) { goto Tw_wq; } goto C5igC; a_TPC: $tkn["\164\157\x6b\145\156"] = ''; goto YqqkN; M4Igt: $this->load->view("\x6d\145\x6d\142\145\162\163\x2f\163\151\x73\167\x61\x2f\x74\145\x6d\160\x6c\x61\x74\x65\x73\57\x68\145\141\144\145\x72", $data); goto siJAt; Q12bW: $data["\x6a\x61\x64\x77\141\x6c\x73\137\x75\152\151\141\156"] = $tglJadwals; goto rIVlN; BfhTi: $this->load->view("\155\145\155\142\145\x72\163\57\163\x69\163\167\141\57\164\145\155\x70\154\x61\x74\x65\x73\57\146\x6f\157\x74\x65\x72"); goto VvtWv; nTnW9: $tglJadwals = $this->cbt->getAllJadwalByJenis(null, $tp->id_tp, $smt->id_smt); goto cREOV; QjcyH: goto ldjqx; goto kwaCI; O0H5k: qPqt9: goto VVkMQ; Oq1bU: $arrKbm = []; goto MpBtx; siJAt: $this->load->view("\155\x65\155\x62\145\x72\163\x2f\163\x69\163\167\x61\x2f\x64\x61\163\150\142\157\141\x72\144"); goto BfhTi; olSeG: GbfNE: goto kGr4s; VvtWv: goto UCwOk; goto tdqKq; NyXLV: ilkNy: goto GC0f5; J90Ks: if ($this->ion_auth->is_admin()) { goto cBpGb; } goto EIrMh; Cc9Cy: $data = ["\165\163\x65\162" => $user, "\152\165\144\165\154" => "\102\145\162\x61\156\x64\x61", "\x73\x75\142\x6a\x75\144\x75\154" => "\110\141\x6c\x61\155\x61\156\40\125\x74\141\155\x61", "\x73\x65\x74\x74\151\x6e\147" => $setting]; goto ZU2M4; IunIf: $day = date("\x4e", strtotime(date("\x59\55\x6d\x2d\x64"))); goto zOeWL; YKDFi: i3oKw: goto xt0MG; NT6PK: $data["\x73\155\164\137\x61\x63\x74\151\x76\145"] = $smt; goto kTedZ; PLFl3: } public function checkTokenJadwal() { goto eOJlO; LVeNY: $token = $this->cbt->getToken(); goto msqIE; GpTF5: $data["\164\x6f\153\145\x6e"] = $token; goto G25m1; eOJlO: $data["\x61\144\141\137\x75\x6a\x69\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\x59\55\155\55\144")); goto LVeNY; msqIE: $token->now = date("\x64\55\x6d\x2d\x59\40\x48\x3a\x69\x3a\163"); goto GpTF5; G25m1: $this->output_json($data); goto lmvw0; lmvw0: } public function output_json($data, $encode = true) { goto JgnAy; B2RKj: $data = json_encode($data); goto e7ofU; JgnAy: if (!$encode) { goto sRLWD; } goto B2RKj; f0zvn: $this->output->set_content_type("\141\160\x70\154\x69\143\141\164\151\157\156\x2f\152\x73\157\x6e")->set_output($data); goto zfdVQ; e7ofU: sRLWD: goto f0zvn; zfdVQ: } public function gantiTahun() { goto lV16a; f7fA2: if (!($i <= $rows)) { goto HFA1u; } goto OV6Wa; lV16a: $aktif = $this->input->post("\x61\143\x74\151\166\x65", true); goto IlFqn; kDMQc: HFA1u: goto ZtlPC; Ahz4D: $this->output_json($data); goto TEj7J; EUdMH: if ($id_tp === $aktif) { goto s9woU; } goto kcW84; IlFqn: $rows = count($this->input->post("\x74\x61\x68\165\x6e", true)); goto jsf9d; jjNQn: $this->logging->saveLog(4, "\x6d\x65\x6e\x67\x67\141\x6e\164\x69\40\164\141\x68\x75\x6e\x20\141\152\141\162\x61\156\40\141\153\164\x69\x66"); goto Ahz4D; jsf9d: $i = 0; goto GSf6h; WZ5_S: $i++; goto gOUL1; oLkpj: goto W8Mwj; goto RcnoX; fekmL: $data["\x75\160\x64\x61\x74\x65"] = $update; goto e9SyD; gOUL1: goto KVIrz; goto kDMQc; ZtlPC: $this->dashboard->update("\155\x61\163\164\145\x72\137\x74\x70", $update, "\x69\144\137\164\x70", null, true); goto fekmL; RcnoX: s9woU: goto jYiAD; OV6Wa: $id_tp = $this->input->post("\x69\x64\137\164\160\133" . $i . "\135", true); goto JWI71; LOcgG: $update[] = array("\x69\144\x5f\x74\x70" => $id_tp, "\164\141\150\165\x6e" => $tahun, "\141\143\x74\151\166\x65" => $active); goto USTus; USTus: Wsukh: goto WZ5_S; bb875: W8Mwj: goto LOcgG; GSf6h: KVIrz: goto f7fA2; kcW84: $active = 0; goto oLkpj; e9SyD: $data["\x73\x74\x61\164\x75\x73"] = true; goto jjNQn; jYiAD: $active = 1; goto bb875; JWI71: $tahun = $this->input->post("\164\x61\150\165\156\x5b" . $i . "\135", true); goto EUdMH; TEj7J: } public function gantiSemester() { goto m5Dv5; x5CgQ: ATBy5: goto bl9r2; aIam4: $update[] = array("\x69\144\137\x73\x6d\164" => $id_smt, "\163\155\164" => $smt, "\141\143\164\x69\166\145" => $active); goto x5CgQ; nXB3V: $i = 1; goto UVEBC; KxqOO: $rows = count($this->input->post("\163\155\x74", true)); goto nXB3V; EGLj1: $this->output_json($data); goto huGoS; odDck: goto H3g04; goto bE8Hb; W3lwk: $smt = $this->input->post("\163\x6d\164\x5b" . $i . "\x5d", true); goto abcEO; sEhGV: if (!($i <= $rows)) { goto TCG5j; } goto YK_AH; bl9r2: $i++; goto odDck; CjMQD: $this->logging->saveLog(4, "\155\x65\156\147\x67\x61\156\x74\151\x20\163\145\x6d\x65\x73\x74\145\162\40\x61\x6b\164\151\x66"); goto EGLj1; BBvpK: $active = 1; goto OM6OV; m5Dv5: $aktif = $this->input->post("\141\x63\x74\x69\x76\145", true); goto KxqOO; OM6OV: Vfo1B: goto aIam4; UVEBC: H3g04: goto sEhGV; IYnJw: $this->dashboard->update("\155\141\163\x74\x65\162\137\x73\x6d\x74", $update, "\151\144\x5f\x73\155\x74", null, true); goto Elvo4; Elvo4: $data["\x75\160\x64\141\164\x65"] = $update; goto U2wof; abcEO: if ($id_smt === $aktif) { goto VJFne; } goto USQQM; bE8Hb: TCG5j: goto IYnJw; U2wof: $data["\163\x74\x61\164\165\163"] = true; goto CjMQD; USQQM: $active = 0; goto d0iiI; sqb53: VJFne: goto BBvpK; d0iiI: goto Vfo1B; goto sqb53; YK_AH: $id_smt = $this->input->post("\151\x64\x5f\163\155\164\133" . $i . "\x5d", true); goto W3lwk; huGoS: } public function getNotifikasi() { } public function getLog($limit) { $this->output_json($this->logging->loadAktifitas($limit)); } public function hapusLog() { goto iSHqe; OxDBr: $deleted = ["\163\164\141\x74\x75\x73" => true, "\155\x65\x73\163\x61\147\x65" => "\142\x65\x72\x68\141\163\x69\154"]; goto Ggz1D; phkQ1: $this->db->trans_complete(); goto EYQPI; EYQPI: $this->output_json($deleted); goto APv6S; D7NCQ: ChVDX: goto OxDBr; V9_Ya: goto Igqhc; goto D7NCQ; iSHqe: $this->db->trans_start(); goto ifiww; oVLz7: $deleted = ["\x73\164\141\164\165\163" => false, "\155\x65\163\x73\141\x67\x65" => "\x67\141\x67\x61\x6c"]; goto V9_Ya; ifiww: if ($this->db->empty_table("\154\157\x67")) { goto ChVDX; } goto oVLz7; Ggz1D: Igqhc: goto phkQ1; APv6S: } public function getLogSiswa($limit) { $this->output_json($this->logging->loadAktifitasSiswa($limit)); } public function getPengumuman($for) { $this->output_json($this->dashboard->loadPengumuman($for)); } public function getJadwalHariIni($id_kelas, $id_hari) { goto khcMF; khcMF: $tp = $this->dashboard->getTahunActive(); goto cb7l2; cb7l2: $smt = $this->dashboard->getSemesterActive(); goto ZCeRB; ZCeRB: $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari)); goto R87Xp; R87Xp: } public function getJadwalKbm($id_kelas) { goto v7VOM; AcOJq: $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas); goto VnvsK; xdy0t: $smt = $this->dashboard->getSemesterActive(); goto AcOJq; TWIxN: $this->output_json(array("\152\141\144\x77\x61\x6c" => $jadwal, "\x69\x73\x74\x69\162\141\150\x61\x74" => $istirahat)); goto OxP39; VnvsK: $istirahat = unserialize($jadwal->istirahat); goto TWIxN; v7VOM: $tp = $this->dashboard->getTahunActive(); goto xdy0t; OxP39: } }
