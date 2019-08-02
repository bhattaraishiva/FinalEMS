<div class="card">
    <h3 id="section_header2">पुरस्कार  /विभूषण /पदक /अन्यको विवरण </h3>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4">
                <label>पुरस्कार  /विभूषण /पदकको नाम : <sup>*</sup></label>
                <input type="text" class="form-control" id="motivation_name" name="motivation_name" placeholder="पुरुस्कार /विभूषण /पदकको नाम :">
            </div>
            <div class="col-sm-4">
                <label>प्रदान गर्ने संस्था  <sup>*</sup></label>
                <input type="text" class="form-control" id="motivation_provider" name="motivation_provider" placeholder="प्रदान गर्ने संस्था">
            </div>
            <div class="col-sm-4">
                <label for="name">मिति : <sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate22"
                    placeholder="YYYY-MM-DD" name="motivation_date">
            </div>
        </div>
    </div>
</div>