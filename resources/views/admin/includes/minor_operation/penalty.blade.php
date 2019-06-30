
<div class="card">
    <h3 id="section_header2">निलम्बन/विभागीय /अन्य कारवाही सम्बन्धि विवरण </h3>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
                <label>कारबाही सम्बन्धि विवरण : <sup>*</sup></label>
                <input type="text" class="form-control" id="penalty_name" name="penalty_name" placeholder="कारबाही सम्बन्धि विवरण">
            </div>
            <div class="col-sm-3">
                <label for="name"> कारवाही निर्णय मिति : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate23" 
                    placeholder="YYYY-MM-DD" name="penalty_decision_date">
            </div>
            <div class="col-sm-3">
                <label for="name">कारवाही लागुहुने मिति  : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate24" 
                    placeholder="YYYY-MM-DD" name="penalty_start_date">
            </div>
            <div class="col-sm-3">
                <label for="name">कारबाही समाप्त हुने मिति : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate25" 
                    placeholder="YYYY-MM-DD" name="penalty_end_date">
            </div>
        </div>
    </div>
</div>
