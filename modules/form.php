<?php

include('navbar.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        

    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/form.php">
                <h3>
                    <span class="title_text">Patient History</span>
                </h3>

                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="ID" class="form-label">Id Number</label>
                            <input type="text" name="ID" value="1" style="text-align: center;" placeholder=""  />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" placeholder="Name"/>
                        </div>
                  
                         <div class="form-row">
                            <div class="form-group">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input style="margin-left: 13px;" type="date" name="DOB" id="DOB"/>
                            </div>
                            <div class="form-group">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" />
                            </div>
                        </div>
                        <div class="clear"></div>


                        <div class="form-group">
                            <label for="aadhar" class="form-label">Aadhaar Card Number</label>
                            <input type="number" name="aadhar" id="aadhar" placeholder="Aadhar Card Number" />
                        </div>

                       <div class="clear"></div>
                            <div class="rows">
                            <div class="form-radio">
                              <label for="Sex" class="form-label">Sex</label>
                              <div class="form-radio-item">
                                    <input type="radio" name="Sex" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
    
                                    <input type="radio" name="Sex" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-radio">
                                <label for="Caste" class="form-label">Caste</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="Caste" value="SC" id="SC" />
                                    <label for="SC">SC</label>
    
                                    <input type="radio" name="Caste" value="ST" id="ST" />
                                    <label for="ST">ST</label>

                                    <input type="radio" name="Caste" value="Others" id="Others" />
                                    <label for="Others">Others</label>
                                </div>
                            </div>
                            <div class="form-radio">
                                <label for="ecostat" class="form-label">Economical Status</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="ecostat" value="BPL" id="BPL" checked="checked" />
                                    <label for="BPL">BPL</label>
    
                                    <input type="radio" name="ecostat" value="Non-BPL" id="Non-BPL" />
                                    <label for="Non-BPL">Non-BPL</label>
                                </div>
                            </div>
                            </div>
                        <div class="clear"></div>
                        <div class="form-textarea">
                            <label for="Add1" class="form-label">Permanent Address</label>
                            <textarea name="Add1" id="Add1" placeholder="Address 1" ></textarea>
                        </div>

                        <div class="form-textarea">
                            <label for="Add2" class="form-label">Local Address</label>
                            <textarea name="Add0" id="Add2" placeholder="Address 2" ></textarea>
                        </div>

                          <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Contact1" class="form-label">Contact No.1</label>
                                <input type="number" name="Contact1" id="Contact1" />
                            </div>
                            <div class="form-group"  >
                                <label for="Contact2" class="form-label">Contact No.2</label>
                                <input type="number" name="Contact2" id="Contact2" />
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="form-group">
                            <label for="Occupation" class="form-label">Occupation</label>
                            <input type="text" name="Occupation" id="Occupation" placeholder="Occupation" />
                        </div>
                           <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Examiner" class="form-label">Examiner</label>
                                <input type="text" name="Examiner" id="Examiner" />
                            </div>
                            <div class="form-group"  >
                                <label for="Reffered" class="form-label">Refereed By</label>
                                <input type="text" name="Reffered" id="Reffered" />
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="form-group">
                            <label form="NOML" class="form-label">Number of members living in same household</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Relation</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        <tr>
                                            <td><input type="text" name="name[]" class="valid"></td>
                                            <td><input type="number" name="age[]" class="valid"></td>
                                            <td><input type="text" name="relation[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>

                                    </tbody>

                            </table>
                        </div>
                          
                        
                            <div class="form-group">
                                 
                                <label for="family_history" class="form-label">Family History</label>
                                <br\>
                           
                           
                                <div class="form-group">

                                     <label for="relation" class="form-label">Relation</label>
                                     <input type="text" name="Relation" id="" />
                            
                                     <label for="disease" class="form-label">Disease</label>
                                     <input type="text" name="Disease" id="" />
                                 </div>
                                 <div class="form-group" style="text-align">
                                     <label for="notes" class="form-label">Notes</label>
                                     <input type="text-area" name="Notes" placeholder="Eg: Date of Diagosis,Description of Diagosis" id="" />
                                 </div>
                          </div>

                       <div class="form-textarea">
                        <div class="form-row">
                              <div class="form-group">
                                <label for="Allergies" class="form-label">Allergies</label>
                                <textarea name="Allergies" rows="6" placeholder="Nothing"></textarea>  
                              </div>
                              <div class="clear"></div>
                               <div class="form-group">
                               &nbsp;&nbsp;&nbsp;
                                <label for="Addiction" class="form-label">Addiction</label>
                                <br\>
                                
                                <label>Tobacco</label>
                                    <table>
                                     <tr >
                                            <td><input style="margin-left: 13px;" type="date" name="Tobacco_start" class="valid"></td> 
                                            <td><input style="margin-left: 13px;" type="date" name="Tobacco_end" class="valid"></td> 
                                        <select style="margin-left: 13px;" class="valid" name="Tobacco">
                                        <option>No</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        </select>
                                    </tr>
                                    </table>
                                   <label>Cigarette (CIG/DAY)</label>
                                    <table>
                                       <tr>
                                            <td><input style="margin-left: 13px;" type="date" name="Cigarette_start" class="valid"></td> 
                                            <td><input style="margin-left: 13px;" type="date" name="Cigarette_end" class="valid"></td> 
                                        <select style="margin-left: 13px;" class="valid" style="display: inline-block;" name="Cigarette">
                                        <option>No</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        </select>
                                     </tr>
                                    </table>
                                 
                                     
                                   <label>Alcohol in gr/day </label> 
                                    <table>
                                        <tr>
                                            <td><input style="margin-left: 13px;" type="date" name="Alcohol_start" class=""></td> 
                                            <td><input style="margin-left: 13px;" type="date" name="Alcohol_end" class=""></td> 
                                        <select style="margin-left: 13px;" class="" name="Alcohol">
                                        <option>No</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        </select>
                                     </tr>   
                                    </table></br\>
                                    </div>
                            </div></div>
                    <div class="fieldset-footer">
                        <span>Form 1 of 5</span>
                    </div>
                    </div>
                
                </fieldset>

                <h3>
                    <span class="title_text">Leprosy History</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                         <div class="form-textarea">
                            <label for="PMH" class="form-label">Past Medical History</label>
                            <textarea name="PMH" id="PMH" placeholder="Past Medical History"></textarea>
                        </div>
                        
                    <div class="fieldset-content">
                         <div class="form-textarea">
                             <label for="PLH" class="form-label">Past Leprosy History</label>
                             <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb1" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Hospital</th>
                                            <th>Drug</th>
                                            <th>Dosage</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore1" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                            <tr style="padding: 2px;">
                                            <td><input type="text" name="hospital" class="valid"></td>
                                            <td><input type="text" name="drug" class="valid"></td>
                                            <td><input type="text" name="dosage" class="valid"></td>
                                            <td><input type="date" name="Start_past_date" class="valid"></td> 
                                            <td><input type="date" name="End_past_date" class="valid"></td> 
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove1'><span class='fa fa-minus'></span></a></td>
                                            </tr>

                                    </tbody>

                            </table>
                        
                        </div>
                        </div>

                         <div class="form-textarea">
                            <label for="ObestricH" class="form-label">Obstetric History</label>
                            <text name="ObestricH" id="ObestricH" placeholder="Obestric History"></text>
                            <td><input type="date" name="Start_past_date" class="valid"></td> 
                        </div>
    
                        <div class="form-group">
                            <label for="KNC" class="form-label">Known Leprosy Contacts</label>
                              <button type="button" class="btn btn-info btn-lg " data-toggle="modal" style="background-color: #e3f4ef;color:#A9A9A9;border-color: #D3D3D3" data-target="#myModal">Open</button>
                               <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                  <div class="modal-dialog">
    
                                   <!-- Modal content-->
                                   <div class="modal-content ">
                                        <div class="modal-header ">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <label  class="form-label" style="font-size: 12px">Known Leprosy Contact</label>
                                        </div>
                                        <div>
                                              <table class="table table-borderless" >
              
                                              <tr>
                                                <th class=""> Patient ID</th>
                                                <td> <input type="text" name="pid" value="" id=""/><td>
                                              </tr>
                                              <tr>
                                                <th> Name</th>
                                                <td><input type="text" name="name" value=""  id=""/></td>
                                              </tr>
                                              <tr>
                                                <th> Contact</th>
                                                 <td><input type="" name="name" value="" id=""/></td>
                                              </tr>
                                               <tr>
                                                   <th> Treatment Description</th>
                                                  <td> <input type="text" name="name" value="" id=""/></td>
                                               </tr>
                                              <tr>
                                                   <th>Leprosy type</th>
                                                   <td> <input type="text" name="name" value="" id=""/></td>
                                              </tr>
             
                                              </table>
                                        </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                             </div>
                                    </div>
                                 </div>
                              </div>

                           
                      </div> 


                        <div class="form-group">
                            <label for="fcfs" class="form-label">First Signs and Symptoms(with date of onset)</label>
                            <input type="text" name="fcfs" id="fcfs" placeholder="All the known Symtoms"/>
                        </div>
                        

                        <div class="form-radio">
                                <label for="tld" class="form-label">Type of Leprosy diagnosed</label>
                                <div class="form-radio-item ">
                                    <input type="checkbox" name="tld" value="PB" id="PB" />
                                    <label style="width: 12%;" for="PB">PB</label>
                                    <input type="checkbox" name="tld" value="MB" id="MB" style=""  />
                                    <label for="MB">MB</label>
                                    <input type="checkbox" name="tld" value="TT" id="TT"/>
                                    <label for="TT">TT</label>
                                    <input type="checkbox" name="tld" value="BT" id="BT"/>
                                    <label for="BT">BT</label>
                                    <input type="checkbox" name="tld" value="BB" id="BB"/>
                                    <label for="BB">BB</label>
                                    <input type="checkbox" name="tld" value="BL" id="BL"/>
                                    <label for="BL">BL</label>
                                    <input type="checkbox" name="tld" value="LL" id="LL"/>
                                    <label for="LL">LL</label>
                                    <input type="checkbox" name="tld" value="PNL" id="PNL"/>
                                    <label for="PNL">PNL</label>
                                </div>
                            </div>
                
                              <div class="form-group">
                                <label  class="form-label">Skin Smears</label>
                                <table style="padding-left: 34px ;margin-top: 9px;" id="Smear_date" class="form-label">
                                    <tr class="tr-header" >
                                        <th >Date</th>
                                    </tr>
                                    <tr >
                                        <td><input style="margin-left: 13px;" type="date" name="Smear_date" id="Smear_date" class="valid" ></td>
                                    </tr>
                                </table>
                            <table style="padding-left: 34px ;margin-top: 9px;" id="tb3" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Site</th>
                                            <th>Mi</th>
                                            <th>Bi</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore3" title="Add More Person"><span class="fa fa-plus" aria-hidden="true"></span></a></th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Site" class="valid"></td>
                                            <td><input type="number" step="any" name="Mi" class="valid"></td>
                                            <td><input type="number" step="any" name="Bi" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove3' title="Remove"><span class="fa fa-minus" aria-hidden="true"></span></a></td>
                                        </tr>

                                    </tbody>

                            </table>
                    </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 2 of 5</span>
                    </div>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Leprosy Treatment</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">

                    <div class="form-group">
                            <label  class="form-label">First Treatment</label>
                            </div>
                        <div class="form-textarea">
                            <label for="drugused" class="form-label">Drug Used</label>
                            <textarea name="drugused" id="drugused" placeholder="Drug Used" rows="2"></textarea>
                        </div>
                        <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Start_first_treatment" class="form-label">Start</label>
                                <input type="date" name="Start_first_treatment" id="Start_first_treatment" />
                            </div>
                            <div class="form-group" >
                                <label for="End_first_treatment" class="form-label">End</label>
                                <input style="margin-left: 51px;" type="date" name="End_first_treatment" id="End_first_treatment" />
                            </div>
                        </div>


                        <div class="clear"></div>
                         <div class="form-group">
                            <label for="omc" class="form-label">Other MDT courses</label>
                            <input type="text" name="omc" id="omc" placeholder="Other MDT courses" />
                        </div>

                         <div class="form-textarea">
                            <label for="Result" class="form-label">Outcome after initial treatment</label>
                            <textarea name="Result" id="Result" placeholder="" rows="2" ></textarea>
                        </div>

                        <div class="form-group">
                                <label  class="form-label">Reaction and Treatment</label>
                                <table style="padding-left: 34px ;margin-top: 9px;" class="form-label">
                                    <tbody>
                                    <tr class="tr-header">
                                       
                                    <div class="dropdown p-3">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reaction Type</button>
                                           <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="#!">Type 1</a>
                                        <a class="dropdown-item" href="#!">Type 2</a>
                                         <a class="dropdown-item" href="#!">None</a>
                                      </div>
                                    </div>
                                    
                                        <th>Description</th>
                                    </tr>
                            
                                    <tr>
                                    
                                       
                                       
                                        <td><textarea name="Description" rows="8" placeholder="Description"></textarea> </td>
                                       
                                    </tr>
                                    </tbody>
                                </table>
                        </div>

                         <div class="form-textarea">
                            <label for="Current" class="form-label">Current treatment</label>
                            <textarea name="Current" id="Current" placeholder=""  ></textarea>
                        </div>


                         <div class="form-group">
                                <label for="Disability" class="form-label">Disability</label> 
                        <div style="display: inline;">
                           <table class="table table-bordered">
                              <tr>
                                <th>Grade 0 </th>
                                <td><input type="checkbox" name="Grade0" value=""></td>
                              </tr>
                         </table>
                        
                            
                               <table class=" table table-bordered">

                                  <tr>
                                      <th rowspan="2">Grade 1</th>
                                      <th >Anesthesia of hand<input type="checkbox" name="Grade1"></th>
                                      
                                  </tr> 
                                  
                                   <tr>
                                         <th >Anesthesia of leg<input type="checkbox" name="Grade1"></th>
                                         
                                      </tr> 
                                  
                              </table>
                           <!--div style="display:flex"-->
                           <table class="table table-bordered">
                               <th colspan="4">Grade 2</th>
                                   
                              <tr>
                                  <th colspan="2">Name</th>
                        
                                  <th>Left</th>
                                  <th>Right</th>
                              </tr>  
                              <tr>
                                <th rowspan=2>Face</th>
                                <td>Lagothalmos</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                                <tr>
                                   <td>Facial Paralysis</td>
                                   <td><input type="checkbox" name="" value=""></td>
                                   <td><input type="checkbox" name="" value=""></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=3>Hands</th>
                                <td>Claw</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                                <tr>
                                   <td>Wrist Drop</td>
                                   <td><input type="checkbox" name="" value=""></td>
                                   <td><input type="checkbox" name="" value=""></td>
                               </tr>
                               <tr>
                                   <td>Fixed Claw</td>
                                   <td><input type="checkbox" name="" value=""></td>
                                   <td><input type="checkbox" name="" value=""></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=2>Feet</th>
                                <td>Foot drop</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                                
                               </tr>
                          </table>
                      </div>
                              
                          
                          
                       </div>


                       <div class="form-group">
                            <label for="Ophtalmic_involvement" class="form-label">Opthalmic involvement</label>
                            <input type="text" name="Ophtalmic_involvement" id="Ophtalmic_involvement" />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 3 of 5</span>
                    </div>
                </fieldset>



                 <h3>
                    <span class="title_text">Clinical Examination</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">

                        <div class="form-group">
                            <label for="Assessment" class="form-label">Assessment Of Skin Lesions</label>
                            <input type="text" name="Assessment" id="Assessment" />
                        </div>


                        <div class="form-group">
                            <label for="Sensory" class="form-label">Sensory Testing(On Diagram)</label>
                            <select>
                                <option value="" disabled selected>Touch</option>
                                <optgroup>
                                    
                                    <option>Present</option>
                                    <option>Absent</option>
                                    <option>None</option>
                                </optgroup>
                            </select>
                            <select>
                                <option value="" disabled selected>Temperature</option>
                                <optgroup>
                                    <option>Hot Present</option>
                                    <option>Hot Absent</option>
                                    <option>Cold Present</option>
                                    <option>Cold Absent</option>
                                    <option>Both</option>
                                    <option>None</option>
                                </optgroup>
                            </select>
                            <select>
                                <option value="" disabled selected>Pain</option>
                                <optgroup>
                                    
                                    <option>Partial</option>
                                    <option>Total</option>
                                    <option>None</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Motor" class="form-label">Motor Testing(Dysfunction)</label>
                            <input type="text" name="Motor" id="Motor" />
                        </div>

                        <div class="form-group">
                            <label for="Peripheral" class="form-label">Peripheral Nerves(Thickened And/Or Tender)</label>
                        <table class="table table-bordered">
                            <thead>
                               <tr>
                                    <th>Name of Nerve </th>
                                    <th>Thicken</th>
                                    <th>Tender</th>
                               </tr>
                           </thead>
                           <tbody>
                              <tr>
                                <td>Supra-orbital</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Great Auricular</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Ulnar</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Medial Cutaneous</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Radial Cutaneous</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Lateral Popliteal</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Sural Nerve</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Posterior Tibial</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                              <tr>
                                <td>Superficial Personal</td>
                                <td><input type="checkbox" name="" value=""></td>
                                <td><input type="checkbox" name="" value=""></td>
                              </tr>
                          </tbody> 
                     </table>
                        </div>   

                        
                          


                        <div class="form-group">
                            <label for="Eyes" class="form-label">Eyes</label>
                            <input type="text" name="Eyes" id="Eyes" />
                        </div>



                         <div class="form-textarea">
                            <label for="furtherobservations" class="form-label">Further Observations</label>
                            <textarea name="furtherobservations" id="furtherobservations" placeholder="" rows="2" ></textarea>
                        </div>

                         <div class="form-textarea">
                            <label for="Complaint" class="form-label">Present Complaint</label>
                            <textarea name="Complaint" id="Complaint" placeholder=""  ></textarea>
                        </div>

                    </div>

                    <div class="fieldset-footer">
                        <span>Form 4 of 5</span>
                    </div>
                
                </fieldset>
                <h3>
                    <span class="title_text">Follow-up Form</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                       <div class="form-group">
                            
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb2" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Date</th>
                                            <th>Clinical Notes</th>
                                            <th>Prescription</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore2" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        <tr>
                                            <td><input type="date" name="name[]" class="valid"></td>
                                            <td><input type="text" name="age[]" class="valid"></td>
                                            <td><input type="text" name="relation[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove2' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>

                                    </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 5 of 5</span>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2018  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
        
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore1').on('click', function() {
              var data = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
              data.find("input").val('');
     });
     $(document).on('click', '.remove1', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore2').on('click', function() {
              var data = $("#tb2 tr:eq(1)").clone(true).appendTo("#tb2");
              data.find("input").val('');
     });
     $(document).on('click', '.remove2', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>

<script type="text/javascript">
    
$(function(){
    $('#addMore3').on('click', function() {
              var data = $("#tb3 tr:eq(1)").clone(true).appendTo("#tb3");
              data.find("input").val('');
     });
     $(document).on('click', '.remove3', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>

</html>