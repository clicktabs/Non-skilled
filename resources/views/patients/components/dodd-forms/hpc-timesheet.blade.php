{{-- <!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nursing Visit Form</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body> --}}


       <main>
         <div class="container pt-5">
            <div class="page-header">
               <h1 class="text-center mt-5 mb-0">Homemaker/Personal Care Documentation Sheet</h1>
            </div>
            <div class="form-holder pt-5 pb-5">
               <form action="hpc-timesheet" method="POST">
                  @csrf
                  <table class="table table-bordered align-middle default-td">
                     <tr>
                        <td>
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>Name of provider:</b></label>
                              <input style="min-width: 200px;" type="text" name="hpcProvider_name" class="form-control">
                           </div>
                        </td>
                        <td>
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>Name of Individual receiving service:</b></label>
                              <input style="min-width: 200px;" type="text" name="hpcindividual_name" class="form-control">
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>DODD Contract Number:</b></label>
                              <input style="min-width: 200px;" type="text" name="hpcProvider_contractNo" class="form-control">
                           </div>
                        </td>
                        <td>
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>Medicaid number of individual:</b></label>
                              <input style="min-width: 200px;" type="text" name="hpcIndividul_MedicaidNo" class="form-control">
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>Signature of Provider:</b></label>
                              <input style="min-width: 200px;" type="text" name="hpcProvider_signature" class="form-control">
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <small><b>My signature on this documentation sheet signifies that I have supported the individual as identified in the Individual Service Plan (ISP) and the time in/out and services provided are accurate.</b></small>
                        </td>
                     </tr>
                  </table>
      
                  <div class="table-responsive">
                     <table class="table table-bordered align-middle default-td not-responsive mt-5">
                        <tr>
                           <td colspan="2"><b>Type of Service (Routine HPC or HPC/OSOC)</b></td>
                           <td><input type="text" name="TypeofService_1" class="form-control"></td>
                           <td><input type="text" name="TypeofService_2" class="form-control"></td>
                           <td><input type="text" name="TypeofService_3" class="form-control"></td>
                           <td><input type="text" name="TypeofService_4" class="form-control"></td>
                           <td><input type="text" name="TypeofService_5" class="form-control"></td>
                           <td><input type="text" name="TypeofService_6" class="form-control"></td>
                           <td><input type="text" name="TypeofService_7" class="form-control"></td>
                        </tr>
                        <tr>
                           <td colspan="2"><b>Date of Service</b></td>
                           <td><input type="date" name="DateofService_1" class="form-control"></td>
                           <td><input type="date" name="DateofService_2" class="form-control"></td>
                           <td><input type="date" name="DateofService_3" class="form-control"></td>
                           <td><input type="date" name="DateofService_4" class="form-control"></td>
                           <td><input type="date" name="DateofService_5" class="form-control"></td>
                           <td><input type="date" name="DateofService_6" class="form-control"></td>
                           <td><input type="date" name="DateofService_7" class="form-control"></td>
                        </tr>
                        <tr>
                           <td colspan="2"><b>Place of Service</b></td>
                           <td><input type="text" name="PlaceofService_1" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_2" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_3" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_4" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_5" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_6" class="form-control"></td>
                           <td><input type="text" name="PlaceofService_7" class="form-control"></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="bg-secondary"><b>Description of service as specified in the ISP</b></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                           <td class="bg-secondary"><input type="text"  class="form-control bg-secondary"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_1" class="form-control"></td>
                           <td><input type="text" name="service_1" class="form-control"></td>
                           <td><input type="text" name="service_2" class="form-control"></td>
                           <td><input type="text" name="service_3" class="form-control"></td>
                           <td><input type="text" name="service_4" class="form-control"></td>
                           <td><input type="text" name="service_5" class="form-control"></td>
                           <td><input type="text" name="service_6" class="form-control"></td>
                           <td><input type="text" name="service_7" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_2" class="form-control"></td>
                           <td><input type="text" name="service_8" class="form-control"></td>
                           <td><input type="text" name="service_9" class="form-control"></td>
                           <td><input type="text" name="service_10" class="form-control"></td>
                           <td><input type="text" name="service_11" class="form-control"></td>
                           <td><input type="text" name="service_12" class="form-control"></td>
                           <td><input type="text" name="service_13" class="form-control"></td>
                           <td><input type="text" name="service_14" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_3" class="form-control"></td>
                           <td><input type="text" name="service_15" class="form-control"></td>
                           <td><input type="text" name="service_16" class="form-control"></td>
                           <td><input type="text" name="service_17" class="form-control"></td>
                           <td><input type="text" name="service_18" class="form-control"></td>
                           <td><input type="text" name="service_19" class="form-control"></td>
                           <td><input type="text" name="service_20" class="form-control"></td>
                           <td><input type="text" name="service_21" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_4" class="form-control"></td>
                           <td><input type="text" name="service_22" class="form-control"></td>
                           <td><input type="text" name="service_23" class="form-control"></td>
                           <td><input type="text" name="service_24" class="form-control"></td>
                           <td><input type="text" name="service_25" class="form-control"></td>
                           <td><input type="text" name="service_26" class="form-control"></td>
                           <td><input type="text" name="service_27" class="form-control"></td>
                           <td><input type="text" name="service_28" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_5" class="form-control"></td>
                           <td><input type="text" name="service_29" class="form-control"></td>
                           <td><input type="text" name="service_30" class="form-control"></td>
                           <td><input type="text" name="service_31" class="form-control"></td>
                           <td><input type="text" name="service_32" class="form-control"></td>
                           <td><input type="text" name="service_33" class="form-control"></td>
                           <td><input type="text" name="service_34" class="form-control"></td>
                           <td><input type="text" name="service_35" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_6" class="form-control"></td>
                           <td><input type="text" name="service_36" class="form-control"></td>
                           <td><input type="text" name="service_37" class="form-control"></td>
                           <td><input type="text" name="service_38" class="form-control"></td>
                           <td><input type="text" name="service_39" class="form-control"></td>
                           <td><input type="text" name="service_40" class="form-control"></td>
                           <td><input type="text" name="service_41" class="form-control"></td>
                           <td><input type="text" name="service_42" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_7" class="form-control"></td>
                           <td><input type="text" name="service_43" class="form-control"></td>
                           <td><input type="text" name="service_44" class="form-control"></td>
                           <td><input type="text" name="service_45" class="form-control"></td>
                           <td><input type="text" name="service_46" class="form-control"></td>
                           <td><input type="text" name="service_47" class="form-control"></td>
                           <td><input type="text" name="service_48" class="form-control"></td>
                           <td><input type="text" name="service_49" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_8" class="form-control"></td>
                           <td><input type="text" name="service_50" class="form-control"></td>
                           <td><input type="text" name="service_51" class="form-control"></td>
                           <td><input type="text" name="service_52" class="form-control"></td>
                           <td><input type="text" name="service_53" class="form-control"></td>
                           <td><input type="text" name="service_54" class="form-control"></td>
                           <td><input type="text" name="service_55" class="form-control"></td>
                           <td><input type="text" name="service_56" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_9" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="service_57" class="form-control"></td>
                           <td><input type="text" name="service_58" class="form-control"></td>
                           <td><input type="text" name="service_59" class="form-control"></td>
                           <td><input type="text" name="service_60" class="form-control"></td>
                           <td><input type="text" name="service_61" class="form-control"></td>
                           <td><input type="text" name="service_62" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_10" class="form-control"></td>
                           <td><input type="text" name="service_63" class="form-control"></td>
                           <td><input type="text" name="service_64" class="form-control"></td>
                           <td><input type="text" name="service_65" class="form-control"></td>
                           <td><input type="text" name="service_66" class="form-control"></td>
                           <td><input type="text" name="service_67" class="form-control"></td>
                           <td><input type="text" name="service_68" class="form-control"></td>
                           <td><input type="text" name="service_69" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_11" class="form-control"></td>
                           <td><input type="text" name="service_70" class="form-control"></td>
                           <td><input type="text" name="service_71" class="form-control"></td>
                           <td><input type="text" name="service_72" class="form-control"></td>
                           <td><input type="text" name="service_73" class="form-control"></td>
                           <td><input type="text" name="service_74" class="form-control"></td>
                           <td><input type="text" name="service_75" class="form-control"></td>
                           <td><input type="text" name="service_76" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_12" class="form-control"></td>
                           <td><input type="text" name="service_77" class="form-control"></td>
                           <td><input type="text" name="service_78" class="form-control"></td>
                           <td><input type="text" name="service_79" class="form-control"></td>
                           <td><input type="text" name="service_80" class="form-control"></td>
                           <td><input type="text" name="service_81" class="form-control"></td>
                           <td><input type="text" name="service_82" class="form-control"></td>
                           <td><input type="text" name="service_83" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_13" class="form-control"></td>
                           <td><input type="text" name="service_82" class="form-control"></td>
                           <td><input type="text" name="service_85" class="form-control"></td>
                           <td><input type="text" name="service_86" class="form-control"></td>
                           <td><input type="text" name="service_87" class="form-control"></td>
                           <td><input type="text" name="service_88" class="form-control"></td>
                           <td><input type="text" name="service_89" class="form-control"></td>
                           <td><input type="text" name="service_90" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_14" class="form-control"></td>
                           <td><input type="text" name="service_91" class="form-control"></td>
                           <td><input type="text" name="service_92" class="form-control"></td>
                           <td><input type="text" name="service_93" class="form-control"></td>
                           <td><input type="text" name="service_94" class="form-control"></td>
                           <td><input type="text" name="service_95" class="form-control"></td>
                           <td><input type="text" name="service_96" class="form-control"></td>
                           <td><input type="text" name="service_97" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_15" class="form-control"></td>
                           <td><input type="text" name="service_98" class="form-control"></td>
                           <td><input type="text" name="service_99" class="form-control"></td>
                           <td><input type="text" name="service_100" class="form-control"></td>
                           <td><input type="text" name="service_101" class="form-control"></td>
                           <td><input type="text" name="service_102" class="form-control"></td>
                           <td><input type="text" name="service_103" class="form-control"></td>
                           <td><input type="text" name="service_104" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_16" class="form-control"></td>
                           <td><input type="text" name="service_105" class="form-control"></td>
                           <td><input type="text" name="service_106" class="form-control"></td>
                           <td><input type="text" name="service_107" class="form-control"></td>
                           <td><input type="text" name="service_108" class="form-control"></td>
                           <td><input type="text" name="service_109" class="form-control"></td>
                           <td><input type="text" name="service_110" class="form-control"></td>
                           <td><input type="text" name="service_111" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text" name="Descriptionofservice_17" class="form-control"></td>
                           <td><input type="text" name="service_112" class="form-control"></td>
                           <td><input type="text" name="service_113" class="form-control"></td>
                           <td><input type="text" name="service_114" class="form-control"></td>
                           <td><input type="text" name="service_115" class="form-control"></td>
                           <td><input type="text" name="service_116" class="form-control"></td>
                           <td><input type="text" name="service_117" class="form-control"></td>
                           <td><input type="text" name="service_118" class="form-control"></td>
                        </tr>
                        <tr style="height: 30px;">
                           <td colspan="2"><input type="text"  name="Descriptionofservice_18" class="form-control"></td>
                           <td><input type="text" name="service_119" class="form-control"></td>
                           <td><input type="text" name="service_120" class="form-control"></td>
                           <td><input type="text" name="service_121" class="form-control"></td>
                           <td><input type="text" name="service_122" class="form-control"></td>
                           <td><input type="text" name="service_123" class="form-control"></td>
                           <td><input type="text" name="service_124" class="form-control"></td>
                           <td><input type="text" name="service_125" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><b>Group Size</b></td>
                           <td><input type="text" name="service_126" class="form-control"></td>
                           <td><input type="text" name="service_127" class="form-control"></td>
                           <td><input type="text" name="service_128" class="form-control"></td>
                           <td><input type="text" name="service_129" class="form-control"></td>
                           <td><input type="text" name="service_130" class="form-control"></td>
                           <td><input type="text" name="service_131" class="form-control"></td>
                           <td><input type="text" name="service_132" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><b>Time in (Begin Time)</b></td>
                           <td><input type="time" name="service_133" class="form-control"></td>
                           <td><input type="text" name="service_134" class="form-control"></td>
                           <td><input type="text" name="service_135" class="form-control"></td>
                           <td><input type="text" name="service_136" class="form-control"></td>
                           <td><input type="text" name="service_137" class="form-control"></td>
                           <td><input type="text" name="service_138" class="form-control"></td>
                           <td><input type="text" name="service_139" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><b>Time out (End Time)</b></td>
                           <td><input type="time" name="service_140" class="form-control"></td>
                           <td><input type="text" name="service_141" class="form-control"></td>
                           <td><input type="text" name="service_142" class="form-control"></td>
                           <td><input type="text" name="service_143" class="form-control"></td>
                           <td><input type="text" name="service_144" class="form-control"></td>
                           <td><input type="text" name="service_145" class="form-control"></td>
                           <td><input type="text" name="service_146" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><b>Number of units of service</b></td>
                           <td><input type="text" name="service_147" class="form-control"></td>
                           <td><input type="text" name="service_148" class="form-control"></td>
                           <td><input type="text" name="service_149" class="form-control"></td>
                           <td><input type="text" name="service_150" class="form-control"></td>
                           <td><input type="text" name="service_151" class="form-control"></td>
                           <td><input type="text" name="service_152" class="form-control"></td>
                           <td><input type="text" name="service_153" class="form-control"></td>
                        </tr>
                     </table>
                  </div>
      
                  <label for="" class="mt-4 mb-1">Notes:</label>
                  <textarea name="note" id="" cols="30" rows="4" class="form-control"></textarea>
                  <div class=" mt-4">
                     <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
                 </div>
                  <p class="mt-3"><small>[This is a sample documentation form designed for an Independent Provider by DODD to be in compliance with rules that were in effect at the time of development [1/1/2014]. This is not an official document, and there is no requirement that providers use this particular document, nor is there any guarantee that this form will be in compliance with later rules. It remains the responsibility of the provider to be familiar with all applicable rules, including those covering service delivery and documentation. Use of this form for documentation is not a guarantee of payment, and services must be provided before claims are submitted for reimbursement.]</small></p>
               </form>
            </div>
         </div>
      
   
   
         <script src="bs/js/bootstrap.min.js"></script>

</main>

{{-- </body>
</html> --}}