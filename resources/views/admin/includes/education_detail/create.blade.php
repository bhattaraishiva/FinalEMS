<div id="header-style">
    <p  style="font-size:23px;">अन्य विवरण </p>
</div>
<br><hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><p style="font-size:20px;font-weight:bold">शैक्षिक योग्यता सम्बन्धि विवरण </p></center>
                {{ csrf_field() }}
                 <div class="row">
                    <div class="form-group col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>सि नं </th>
                                    <th>शैक्षिक योग्यताको तह</th>
                                    <th>संकाय </th>
                                    <th>मूल बिषय</th>
                                    <th>राष्ट्र </th>
                                    <th>शैक्षिक संस्था</th>
                                    <th>बोर्ड</th>
                                    <th>उत्रिण् साल </th>
                                    <th>प्रतिशत / श्रेणी </th>
                                    <th><input type="button" value="+" class="btn btn-info addRow"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="serial_no[]" class="form-control serial_no"></td>
                                    <td><input type="text" name="edu_level[]" class="form-control edu_level"></td>
                                    <td><input type="text" name="stream[]" class="form-control stream"></td>
                                    <td><input type="text" name="major_sub[]" class="form-control major_sub"></td>
                                    <td><input type="text" name="country[]" class="form-control country"></td>
                                    <td><input type="text" name="edu_institute[]" class="form-control edu_institute"></td>
                                    <td><input type="text" name="board[]" class="form-control board"></td>
                                    <td><input type="text" name="passed_year[]" class="form-control passed_year"></td>
                                    <td><input type="text" name="division[]" class="form-control division"></td>
                                    <td><button type="button" class="btn btn-danger remove">-</button></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
{{--
                <br />
                <button type="submit" style="width:20%;" class="btn btn-primary btn-lg">OK</button> --}}
                <!-- <button id="cancel" style="width:20%;" class="btn btn-danger btn-lg" value="1">Cancel</button>           -->
            </div>
        </div>
    </div>
</div>
</div>