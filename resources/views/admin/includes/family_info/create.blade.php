<div id="header-style">
    <p  style="font-size:23px;">पारिवारिक विवरण </p>
</div>
<br><hr>
<div class="form-group">
    <div class="row">
        <div class="col-sm-3">
            <label for="inputEmail3">बुबाको नाम थर : <sup>*</sup></label>
            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="बुबाको नाम थर "
                required>
        </div>
        <div class="col-sm-3">
            <label for="inputPassword3"> आमाको नाम थर : <sup>*</sup> </label>
            <input class="form-control" type="text" name="mother_name" id="mother_name" placeholder="आमाको नाम थर "
                required>
        </div>
        <div class="col-sm-3">
            <label for="name">हजुरबुबाको नाम : <sup>*</sup> </label>
            <input class="form-control" type="text" name="grandfather_name" id="grandfather_name"
                placeholder="हजुरबुबाको नाम">
        </div>
        <div class="col-sm-3">
            <label for="name">हजुर आमाको नाम : </label>
            <input class="form-control" type="text" name="grandmother_name" id="grandmother_name"
                placeholder="हजुर आमाको नाम ">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <label for="name">बैवाहिक अवस्था : <sup>*</sup> </label>
            <select class="form-control chosen" name="marital_status" id="marital_status">
                <option selected value="u">अविवाहित</option>
                <option value="m"> विवाहित</option>
                <option value="s">एकल</option>
                <option value="o">अन्य</option>
            </select>
        </div>
        <div id="spousename" style="display:none">
            <div class="col-sm-4">
                <label for="name">पति / पत्नीको नाम थर : </label>
                <input class="form-control" type="text" name="spouse_name" id="spouse_name"
                    placeholder="पति / पत्नीको नाम थर ">
            </div>

        <div class="col-sm-4" >
            <label for="name">पति/ पत्नी निजामती /प्रदेश सेवामा कर्मचारी भएको ? :</label><br>
            <input type="checkbox" name="spouse_province_employee" id="spouse_province_employee" value="yes"> हो
        </div>
    </div>
    </div>
    <hr>
    <div id="spouse_pradesh_employee" style="display:none">
        <div class="row">
            <div class="col-sm-3">
                <label for="name">भएमा कार्यालयको नाम ठेगाना : <sup>*</sup> </label>
                <input class="form-control" type="text" name="spouse_office_name" id="spouse_office_name"
                    placeholder="भएमा कार्यालयको नाम ठेगाना">
            </div>
            <div class="col-sm-3">
                <label for="name">कर्मचारी संकेत न  : <sup>*</sup></label>
                <input class="form-control" type="text" name="spouse_employee_number" id="spouse_employee_number"
                    placeholder="कर्मचारी संकेत न :">
            </div>
            <div class="col-sm-3">
                <label for="name">प्रदेश संकेत न : <sup>*</sup> </label>
                <input class="form-control" type="text" name="spouse_pradesh_employee_number"
                    id="spouse_pradesh_employee_number" placeholder="प्रदेश संकेत न ">
            </div>
        </div>
    </div>
</div>