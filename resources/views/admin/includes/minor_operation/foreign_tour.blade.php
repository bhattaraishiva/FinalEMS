<div class="card">
    <h3 id="section_header2">बैदेशिक भ्रमण </h3>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
                <label>भ्रमणको विवरण: <sup>*</sup></label>
                <input type="text" class="form-control" id="ftour_info" name="ftour_info"
                    placeholder="भ्रमणको विवरण:">
            </div>
            <div class="col-sm-3">
                <label>देश: <sup>*</sup></label>
                <input class="form-control" type="text" name="ftour_country" id="ftour_country"
                    placeholder="देश">
            </div>
            <div class="col-sm-2">
                <label for="name">उदेश्य : <sup>*</sup></label>
                <input class="form-control" type="text" name="ftour_objective" id="ftour_objective"
                    placeholder="उदेश्य ">
            </div>
            <div class="col-sm-2">
                <label for="name">भ्रमणको अवधि (देखि) : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate18" 
                    placeholder="YYYY-MM-DD" name="ftour_start_date">
            </div>
            <div class="col-sm-2">
                <label for="name">भ्रमणको अवधि (सम्म) : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate19" 
                    placeholder="YYYY-MM-DD" name="ftour_end_date">
            </div>
           
        </div>
    </div>
</div>