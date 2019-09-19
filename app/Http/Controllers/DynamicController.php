<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Taha;
use App\Pad;
use App\Employee;
use App\Shreni;
use App\District;
use App\Palika;
use App\Samuha;
use App\Upasamuha;
use Session;
use App\KaryalayaPad;

class DynamicController extends Controller
{
    //
    public function fetch(Request $request){
        // dd($request->all());
        $select = $request->get('select');
        $value  = $request->get('value');
        $dependent = $request->get('dependent');
        $output='';

        if($dependent == 'nirdeshanalaya_id'){
            $data = Nirdeshanalaya::where('status',1)
                ->where($select,$value)
                ->get();
            $output = '<option value = ""> निर्देशानालय छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->nir_name.'</option>';
            }
        }else if($dependent == 'kar_id'){
            $data = Karyalaya::where('status',1)
                ->where($select,$value)
                ->get();


            $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
            }
        }

        else if($dependent == 'pad_id'){
            $data = KaryalayaPad::where('karyalaya_id',$value)->get();
            $output .= '<option value = ""> पद छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
            }
        }

// this section isfor samayojan section

         if($dependent == 'samayojan_kar_id'){
            $data = Karyalaya::where('status',1)
                ->where('ministry_id',$value)
                ->get();

            $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
            }
        }

        else if($dependent == 'samayojan_pad_id'){
            $data = KaryalayaPad::where('karyalaya_id',$value)->get();
            $output .= '<option value = ""> पद छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
            }
        }

            // this section isfor karar section
             if($dependent == 'karar_kar_id'){
                $data = Karyalaya::where('status',1)
                    ->where('ministry_id',$value)
                    ->get();

                $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';
                foreach($data as $row){
                    $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
                }
            }
            else if($dependent == 'karar_pad_id'){
                $data = KaryalayaPad::where('karyalaya_id',$value)->get();
                $output .= '<option value = ""> पद छान्नुहोस् </option>';
                foreach($data as $row){
                    $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
                }
            }
 // this section isfor naya section
            if($dependent == 'naya_kar_id'){
                $data = Karyalaya::where('status',1)
                    ->where('ministry_id',$value)
                    ->get();
                    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';
                    foreach($data as $row){
                    $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
                }
            }
            else if($dependent == 'naya_pad_id'){
                $data = KaryalayaPad::where('karyalaya_id',$value)->get();
                $output .= '<option value = ""> पद छान्नुहोस् </option>';
                foreach($data as $row){
                    $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
                }
            }
// this section isfor opration samayojan section
if($dependent == 'oper_samayojan_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();
      $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';
       foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
}

else if($dependent == 'oper_samayojan_pad_id'){
    $data = KaryalayaPad::where('karyalaya_id',$value)->get();
    $output .= '<option value = ""> पद छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
    }
}
// this section isfor operation padasthapan section
if($dependent == 'oper_padasthapan_kar_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
}
else if($dependent == 'oper_padasthapan_pad_id'){
    $data = KaryalayaPad::where('karyalaya_id',$value)->get();
    $output .= '<option value = ""> पद छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
    }
}
// this section isfor operation saruwa section
if($dependent == 'oper_saruwa_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
}
else if($dependent == 'oper_saruwa_pad_id'){
    $data = KaryalayaPad::where('karyalaya_id',$value)->get();


    $output .= '<option value = ""> पद छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->pad_name.'</option>';
    }
}
// this section isfor operation baduwa section
if($dependent == 'oper_baduwa_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
}
else if($dependent == 'oper_baduwa_pad_id'){
    $data = KaryalayaPad::where('karyalaya_id',$value)->get();
    $output .= '<option value = ""> पद छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
    }
}
// this section isfor operation nilamban section
if($dependent == 'oper_nilamban_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
}
else if($dependent == 'oper_nilamban_pad_id'){
    $data = KaryalayaPad::where('karyalaya_id',$value)->get();
    $output .= '<option value = ""> पद छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
    }
}

// this section isfor operation awakash section
if($dependent == 'oper_awakash_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();
    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';
    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
    }
    else if($dependent == 'oper_awakash_pad_id'){
        $data = KaryalayaPad::where('karyalaya_id',$value)->get();
        $output .= '<option value = ""> पद छान्नुहोस् </option>';
        foreach($data as $row){
            $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
        }
    }

    // this section isfor operation rajinama section
if($dependent == 'oper_rajinama_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
    }
    else if($dependent == 'oper_rajinama_pad_id'){
        $data = KaryalayaPad::where('karyalaya_id',$value)->get();
        $output .= '<option value = ""> पद छान्नुहोस् </option>';
        foreach($data as $row){
            $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
        }
    }

       // this section isfor oper_sangh_firta section
if($dependent == 'oper_sangh_firta_karyalaya_id'){
    $data = Karyalaya::where('status',1)
        ->where('ministry_id',$value)
        ->get();

    $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

    foreach($data as $row){
        $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
    }
    }
    else if($dependent == 'oper_sangh_firta_pad_id'){
        $data = KaryalayaPad::where('karyalaya_id',$value)->get();
        $output .= '<option value = ""> पद छान्नुहोस् </option>';
        foreach($data as $row){
            $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
        }
    }
       // this section isfor edit personaldata section
       if($dependent == 'edit_karyalaya_id'){
        $data = Karyalaya::where('status',1)
            ->where('ministry_id',$value)
            ->get();

        $output = '<option value = ""> कार्यालय छान्नुहोस् </option>';

        foreach($data as $row){
            $output .= '<option value = "'.$row->id.'">'.$row->kar_name.'</option>';
        }
        }
        else if($dependent == 'edit_pad_id'){
            $data = KaryalayaPad::where('karyalaya_id',$value)->get();
            $output .= '<option value = ""> पद छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->pad_id.'">'.$row->pads->first()->pad_name.'</option>';
            }
        }

//for  permanent address of dynamic palika
        else if($dependent == 'district_id'){
            $data = District::where($select,$value)->get();
            // $output = '<option value = ""> Select '.ucfirst($dependent).'</option>';

            $output = '<option value = ""> जिल्ला छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->district_id.'">'.$row->district_name.'</option>';
            }
        }
        else if($dependent == 'palika_id'){
            $data = Palika::where($select,$value)->get();
            $output = '<option value = ""> पालिका छान्नुहोस् </option>';

            foreach($data as $row){
                $output .= '<option value = "'.$row->palika_id.'">'.$row->palika_name.'</option>';
            }
        }
        // this is fordynamic current address
        else if($dependent == 'cdistrict_id'){
            $data = District::where($select,$value)->get();
            $output = '<option value = ""> जिल्ला छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->district_id.'">'.$row->district_name.'</option>';
            }
        }
        else if($dependent == 'cpalika_id'){

            $datas = Palika::where('district_id',$value)->get();
            $output = '<option value = ""> पालिका छान्नुहोस् </option>';

            foreach($datas as $row){
                $output .= '<option value = "'.$row->palika_id.'">'.$row->palika_name.'</option>';
            }
        }
        // this section isfor selecting the samuha dynamically
          else if($dependent == 'samuha_id'){
            $data = Samuha::where('sewa_id',$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }
        else if($dependent == 'padasthapan_samuha_id'){
            $data = Samuha::where('sewa_id',$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'upasamuha_id'){
            $data = Upasamuha::where($select,$value)->get();
            $output = '<option value = ""> उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
        else if($dependent == 'padasthapan_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = ""> उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        // this section isfor selecting the first_samayojan_samuha dynamically
        else if($dependent == 'first_samayojan_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'first_samayojan_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = ""> उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
        // this section isfor selecting the samuha dynamically
        else if($dependent == 'before_pradesh_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'before_pradesh_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        // this section isfor selecting the samayojan_before_pradesh_samuha dynamically
        else if($dependent == 'samayojan_before_pradesh_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'samayojan_before_pradesh_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

         // this section is for selecting the kaam_kaj_samuha dynamically
        else if($dependent == 'kaam_kaj_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'kaam_kaj_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
         // this section is for selecting the samayojan dynamically
         else if($dependent == 'samayojan_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'samayojan_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        // this section is for selecting the samayojan dynamically
        else if($dependent == 'karar_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'karar_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
         // this section is for selecting the naya  samuha dynamically
         else if($dependent == 'naya_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'naya_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        // this section is for selecting the oper_saruwa samuha dynamically
        else if($dependent == 'oper_saruwa_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_saruwa_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

         // this section is for selecting the oper_baduwa samuha dynamically
         else if($dependent == 'oper_baduwa_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_baduwa_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
        // this section is for selecting the oper_nilamban samuha dynamically
        else if($dependent == 'oper_nilamban_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_nilamban_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
         // this section is for selecting the oper_awakash samuha dynamically
         else if($dependent == 'oper_awakash_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_awakash_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
        // this section is for selecting the oper_rajinama samuha dynamically
        else if($dependent == 'oper_rajinama_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_rajinama_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        // this section is for selecting the oper_sangh_firta samuha dynamically
        else if($dependent == 'oper_sangh_firta_samuha_id'){
            $data = Samuha::where($select,$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'oper_sangh_firta_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }
        // this section is for editing the employee job
        else if($dependent == 'edit_samuha_id'){
            $data = Samuha::where('sewa_id',$value)->get();
            $output = '<option value = "">  समूह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->samuha_name.'</option>';
            }
        }

        else if($dependent == 'edit_upasamuha_id'){
            $data = Upasamuha::where('samuha_id',$value)->get();
            $output = '<option value = "">  उप-समुह छान्नुहोस् </option>';
            foreach($data as $row){
                $output .= '<option value = "'.$row->id.'">'.$row->upasamuha_name.'</option>';
            }
        }

        echo $output;
    }

}