<h2 class="panel panel-header">व्यक्तिगत विवरण </h2>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="inputEmail3">कर्मचारी संकेत् नम्बर </label>
                                <input type="text" class="form-control" id="employee_number" name="employee_number"
                                    placeholder="कर्मचारी संकेत् नम्बर " required>
                            </div>

                            <div class="col-sm-3">
                                <label for="inputPassword3">पहिलो नाम (देवनागरि)</label>
                                <input class="form-control" type="text" name="fname" id="fname" placeholder="पहिलो नाम "
                                    required>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">बिचको नाम(देवनागरि) </label>
                                <input class="form-control" type="text" name="mname" id="mname" placeholder="बिचको नाम">
                            </div>

                            <div class="col-sm-3">
                                <label for="name">थर(देवनागरिमा) </label>
                                <input class="form-control" type="text" name="lname" id="lname" placeholder="थर "
                                    required>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                                <input class="form-control" type="text" name="efname" id="efname"
                                    placeholder="FIRST NAME IN BLOCK LETTER" required
                                    style="text-transform: uppercase;">
                            </div>

                            <div class="col-sm-3">
                                <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                                <input class="form-control" type="text" name="emname" id="emname"
                                    placeholder="MIDDLE NAME IN BLOCK LETTER" style="text-transform: uppercase;">
                            </div>

                            <div class="col-sm-3">
                                <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) </label>
                                <input class="form-control" type="text" name="elname" id="elname"
                                    placeholder="LAST NAME IN BLOCK LETTER" required style="text-transform: uppercase;">
                            </div>

                            <div class="col-sm-3">
                                <label for="name">जन्म मिति </label>
                                <input class=" form-control nepali-calendar" id="nepaliDate5" required
                                    placeholder="YYYY-MM-DD" name="dob">
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">लिङ्ग</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="m">पुरुष</option>
                                    <option value="f">महिला</option>
                                    <option value="o">अन्य</option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">जाति </label>
                                <select class="form-control chosen" name="caste">
                                    <option value="ब्राह्मण">ब्राह्मण </option>
                                    <option value="छेत्री">छेत्री</option>
                                    <option value="जनजाती">जनजाती</option>
                                    <option value="दलित">दलित </option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">समुदाय </label>
                                <select class="form-control chosen" name="community">
                                    <option value="तराई">तराई </option>
                                    <option value="पहाड">पहाड</option>
                                    <option value="हिमाल">हिमाल</option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">नागरिकता नं:</label>
                                <input class="form-control" type="text" name="national_id" id="national_id"
                                    placeholder="नागरिकता नं:" required>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">नागरिकता जारी मिति </label>

                                <input class="form-control" type="text" name="national_id_issue_date" id="nepaliDate6"
                                    required placeholder="YYYY-MM-DD" required>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">नागरिकता जारी जिल्ला </label>
                                <select name="national_id_issue_district" id="national_id_issue_district"
                                    class="form-control chosen">

                                    @foreach ($districts as $district)
                                    <option value="{{$district->district_id}}">{{$district->district_name}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="name">फोटो </label>
                                <input class="form-control" type="file" name="image" id="image"
                                    onchange="readURL(this)">
                            </div>

                            <div class="col-sm-3" style="height:90px; width:90px; background-color: aliceblue;">
                                <img src="#" id="pic">
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">मोबाइल नं: </label>
                                <input class="form-control" type="text" name="mobile_no" id="mobile_no"
                                    placeholder="मोबाइल नं:" required>
                            </div>
                            <div class="col-sm-3">
                                <label for="name">इ-मेल ठेगाना</label>
                                <input class="form-control" type="email" name="email" id="email"
                                    placeholder="example@gmail.com" required>
                            </div>
                        </div>
                    </div>