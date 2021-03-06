﻿<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(doctorate,courses); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $doctorate["title"] ?></small><br><?= $doctorate["courses"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12">


                            <h2>Curriculum Overview</h2>

                            <p>You must complete a minimum of 60 approved semester credits beyond your Master’s degree. (Coursework used to fulfill the requirements of a Master’s degree may not be used to fulfill the requirements for this PhD program.)</p>

                             <p>This program is designed to be completed in 4 years.</p>

                        </section>

                        <section class="col-xs-12">

                                <h3>A. Rhetoric and Theory <small>(6 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 7410: Theory &amp; Research in Professional Communication <small>(3 credits; offered Fall semester in even years)</small></li>

<li>ENGL 7830: Rhetorical Theory <small>(3 credits; offered Spring semester in odd years)</small></li>
                                </ul>

                           
                                <h3>B. Research <small>(12 credits required)</small></h3>
                                
                                <p>If you took any of these courses for your Master's degree, you do not need to retake the course(s); however, you still must take 12 credits under this category for your PhD.</p>

                                <ul class="list-unstyled">

                                    <li>ENGL 7000: Advanced Research Methods in Professional Communication <small>(3 credits; offered Spring semester in even years)</small></li>
                                    <li>ENGL 7440: Studies in Culture and Professional Communication <small>(3 credits; offered Spring semester in even years)</small></li>
                                    <li>ENGL 7900: Research Internship <small>(6 credits; work is typically done the summer after your fourth semester; see timeline below)</small></li>
                                </ul>

                           

                                <h3>C. Technology and Design <small>(9 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 7400: Advanced Editing <small>(3 credits; offered Spring semester in even years)</small></li>
                                    <li>ENGL 7480: Studies in Technology and Writing <small>(3 credits; offered Fall semester in even years)</small></li>
                                    <li>ENGL 7460: Studies in Digital Media <small>(3 credits; offered Fall semester in odd years)</small></li>

                                </ul>

                          

                                <h3>D. Pedagogy <small>(9 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6820: Practicum in Teaching English <small>(3 credits; offered every Fall semester; required for a Graduate Instructorship appointment)</small></li>
                                    <li>ENGL 7800: Theory and Practice of Online Education in Writing <small>(3 credits; offered Fall semester in odd years)</small></li>
                                    <li>ENGL 7860: Teaching Technical Writing <small>(3 credits; offered Spring semester in odd years)</small></li>

                                </ul>

                           

                                <h3>E. English Cognate <small>(3 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>3-credit 6000-level course in English outside of Technical Communication and Rhetoric (i.e., ENGL designation not listed in A-D or G, such as Digital Folklore, Postcolonial Literature)</li> 

                                </ul>

                           

                                <h3>F. External Cognate <small>(3 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>3-credit course at the 6000 or 7000 level in a department outside English (course selection requires Supervisory Committee approval)</li> 

                                </ul>
                          

                                <h3>G. Dissertation <small>(18 credits required)</small></h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 7970: Dissertation Research <small>(18 credits required)</small></li>
<li>Must pass Comprehensive Exam and successfully defend dissertation proposal before registering for ENGL 7970</li>
<li> Note: With dissertation committee chair approval, a 3-credit elective may substitute for 3 credits of ENGL 7970</li>
                                 

                                </ul>

                            

                                <h3>H. Electives <small>(0 credits required)</small></h3>

                                <ul class="list-unstyled">

<li>ENGL 7920: Directed Study <small>(3 credits)</small></li>                                    
<li>ENGL 7420: Usability Studies and Human Factors in Professional Communication <small>(3 credits)</small></li>
                                 <li>ENGL 7890: Studies in Writing and Rhetoric <small>(3 credits)</small></li>
<li>ENGL 7430: Publications Management <small>(3 credits)</small></li>
<li>ENGL 7450: Reading Theory and Document Design <small>(3 credits)</small></li>
<li>ENGL 7470: Studies in Specialized Documents <small>(3 credits)</small></li>

                                </ul>

                           
                                                   
</section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(doctorate,courses) ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>