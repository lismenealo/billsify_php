<!-- Main -->
<section id="main">
    <h2 class="hidden">Main section of premium page</h2>
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="content col-8 col-12-medium">

                <section>
                    <header>
                        <h2>Full control over your <strong>bills</strong><br />
                            Capture and keep track!</h2>
                    </header>
                    <h3>Ask for our premium plans</h3>
                    <p>
                        Since the app is very young we are very open to suggestions and improvements. Therefore our premium plan includes tailor
                        made features and additions to the main application. Write to us using the bellow form, explain your ideas, our commercial team
                        will get back to you with the details of the budget and the delivery time-table.
                    </p>
                    <form method="post" action="#">
                        <div class="row gtr-50">
                            <div class="col-12">
                                <input name="name" placeholder="Name" type="text" pattern="[A-Za-z|\s]{0,15}" required/>
                            </div>
                            <div class="col-12">
                                <input name="lastname" placeholder="Last Name" type="text" pattern="[A-Za-z|\s]{0,40}" required/>
                            </div>
                            <div class="col-6 col-12-small">
                                <input name="email" placeholder="Email" type="email" id="email" required onkeyup="validateEmail()"/>
                                <span class="validation" id="result" style="display: none">Email Format Not Valid</span>
                            </div>
                            <div class="col-6 col-12-small">
                                <input name="phone" placeholder="Phone number" type="text" pattern="[0-9]{9}" required/>
                            </div>

                            <div class="col-6">
                                <label>
                                    Premium plan mode
                                </label>
                                <select name="plan_type" id="plan_mode" onchange="calculate_budget()">
                                    <option value="30">Bronze</option>
                                    <option value="40">Silver</option>
                                    <option value="50">Gold</option>
                                </select>
                            </div>
                            <div class="col-6 col-12-small">
                                <label>
                                    Premium plan duration
                                </label>
                                <input id="plan_duration" name="plan_duration" placeholder="Months" type="number" min="0" max="12"  onchange="calculate_budget()"/>
                            </div>
                            <div class="col-12">
                                <label>
                                    <input id="real_time" type="checkbox" onchange="calculate_budget()"/>
                                    Real Time OCR
                                </label>
                                <label>
                                    <input id="google_pay" type="checkbox" onchange="calculate_budget()"/>
                                    Integration with Google Pay
                                </label>
                                <label>
                                    <input id="apple_pay" type="checkbox" onchange="calculate_budget()"/>
                                    Integration with Apple Pay
                                </label>
                                <label>
                                    <input id="cloud_storage" type="checkbox" onchange="calculate_budget()"/>
                                    Cloud Storage
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    Budget in euros, this is a pre-calculation, the final details will be send over email
                                </label>
                                <input id="budget_pre_calculation" name="budget_pre_calculation" type="number" step="any" value="0" disabled/>
                            </div>
                            <div class="col-12">
                                <label>
                                    <input type="checkbox" id="privacy_policy" onchange="document.getElementById('submit').disabled = !document.getElementById('privacy_policy').checked;"/>
                                    Privacy Policy
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    <input id="submit" type="submit" class="form-button-submit button icon solid fa-envelope" value="Send" disabled/>
                                </label>
                            </div>
                        </div>
                    </form>
                </section>

            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="col-4 col-12-medium">
                <!-- Post -->
                <article class="box post">
                    <span class="image featured"><img src="images/invoice.gif" alt="Billsify OCR"/></span>
                    <h3>Household Economy</h3>
                    <p>The applicatoin aims to support the management of the household economy.
                        The main functionality is to allow capturing and storing captures of invoices and printed receipts.</p>
                    <h3>Capture invoices, classify them, balance overview</h3>
                    <p>Existing applications do not allow direct control.
                        The application also allows the capture of invoices, their classification and the calculation
                        of the balance of expenses by categories.</p>
                    <h3>OCR (Optical Character Recognition)</h3>
                    <p>
                        In future versions it is intended to include image processing and pattern recognition in the form
                        of OCR (Optical Character Recognition) service to extract text from captured image of the stored bills</p>
                    <ul class="actions">
                        <li><a href="application_details" class="button icon solid fa-file">Learn More</a></li>
                    </ul>
                </article>

            </div>

        </div>
    </div>
</section>