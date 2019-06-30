<div id="header-style">
    <p  style="font-size:23px;">नोकरी सम्बन्धि विवरण </p>
</div>
<br>
<div class="form-group">
    <label for="name">कर्मचारीको प्रकार </label>
    <select name="employee_type" id="employee_type" class="form-control chosen">
        <option>कर्मचारीको प्रकार</option>
        <option value="kaam_kaaj">काम काज</option>
        <option value="samayojan">समायोजन</option>
        <option value="karar">करार</option>
        <option value="naya">नयाँ</option>
    </select>
    <hr>
    <div id="kaam_kaaj_employee" style="display:none">
        @include('admin.includes.job_info.kaam_kaaj_employee.create')
    </div>

    <div id="samayojan_employee" style="display:none">
            @include('admin.includes.job_info.samayojan_employee.create')
    </div>

    <div id="karar_employee" style="display:none">
        @include('admin.includes.job_info.karar_employee.create')
    </div>

    <div id="naya_employee" style="display:none">
        @include('admin.includes.job_info.naya_employee.create')
    </div>
    <div id="empty">
        <h4 class="alert alert-danger" id="section_header3">कर्मचारीको प्रकार छान्नुहोस् । </h4>
    </div>

</div>