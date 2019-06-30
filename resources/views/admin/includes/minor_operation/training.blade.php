<div class="card">
    <h3 id="section_header2">तालिम (३० कार्य दिन भन्दा बढी ) </h3>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
                <label>तालिमको प्रकार :<sup>*</sup></label>
                <input type="text" class="form-control" id="training_type" name="training_type"
                    placeholder="तालिमको प्रकार">
            </div>
            <div class="col-sm-3">
                <label>तालिम दिने संस्था: <sup>*</sup></label>
                <input class="form-control" type="text" name="training_institute" id="training_institute"
                    placeholder="तालिम दिने संस्था:">
            </div>
            <div class="col-sm-2">
                <label for="name">तालिम अवधि (देखि) <sup>*</sup>:</label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate16"
                    placeholder="YYYY-MM-DD" name="training_start_date">
            </div>
            <div class="col-sm-2">
                <label for="name">तालिम अवधि (सम्म) :<sup>*</sup></label>
                <input type="text" class=" form-control nepali-calendar" id="nepaliDate17"
                    placeholder="YYYY-MM-DD" name="training_end_date">
            </div>
            <div class="col-sm-2">
                <label for="name">श्रेणी:<sup>*</sup></label>
                <input class="form-control" type="text" name="training_division" id="training_division"
                    placeholder="श्रेणी">
            </div>
        </div>
    </div>
</div>