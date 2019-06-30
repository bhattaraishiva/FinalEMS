<div class="card">
    <h3 id="section_header2">अध्ययन  बिदा / असाधारण बिदा </h3>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4">
                <label>बिदाको प्रकार: <sup>*</sup></label>
                <input type="text" class="form-control" id="leave_type" name="leave_type"
                    placeholder="बिदाको प्रकार:">
            </div>
            <div class="col-sm-4">
                <label for="name">बिदाको अवधि (देखि) : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate20" 
                    placeholder="YYYY-MM-DD" name="leave_start_date">
            </div>
            <div class="col-sm-4">
                <label for="name">बिदाको अवधि (सम्म) : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate21" 
                    placeholder="YYYY-MM-DD" name="leave_end_date">
            </div>
           
        </div>
    </div>
</div>