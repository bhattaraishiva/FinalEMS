function FillAddress(f) {
  if(f.addresstoo.checked == true) {
    f.ppradesh_id.value = f.cpradesh_id.value;
    f.pdistrict_id.value = f.cdistrict_id.value;
    f.ppalika_id.value = f.cpalika_id.value;
    f.permanent_wardno.value = f.current_wardno.value;
    f.permanent_tole.value = f.current_tole.value;
  }
}



// function CopyAdd() {
  
//   var cb1 = document.getElementById('sameadd');
//   var p = document.getElementById('ppradesh_id');
//   var cp = document.getElementById('cpradesh_id');
//   var d = document.getElementById('pdistrict_id');
//   var cd = document.getElementById('cdistrict_id');
//   var pa = document.getElementById('ppalika_id');
//   var cpa = document.getElementById('cpalika_id');
//   var w = document.getElementById('permanent_wardno');
//   var cw = document.getElementById('current_wardno');
//   var t = document.getElementById('permanent_tole');
//   var ct = document.getElementById('current_tole');

//   if (cb1.checked) {
//     p.value = cp.value;
//     d.value = cd.value;
//     pa.value = cpa.value;
//     w.value = cw.value;
//     t.value = ct.value;

//   } else {
//     cp.value = '';
//     cd.value = '';
//     cpa.value = '';
//     cw.value = '';
//     ct.value = '';
//   }
// }