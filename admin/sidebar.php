<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="https://dissertationwritinghelp.net/admin/blog_upload">Blog Upload</a></li>
            <li><a href="https://dissertationwritinghelp.net/admin/form_data">Form Submit Data</a></li>
            <li><a href="https://dissertationwritinghelp.net/admin/order_now_form_data">Order Form</a></li>
            <li><a href="https://dissertationwritinghelp.net/admin/indexpage"><strong>Home Page content edit</strong></a></li>
            <h2>Dissertation Pages editing</h2>
            <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dissertation</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Levels</a>
                            <ul id="levelsSubmenu">
                                <li><a href="https://dissertationwritinghelp.net/admin/buy-mba-dissertation-service-edit" onclick="showPageContent('mbaPage')">MBA Edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/buy-master-dissertation-services-edit" onclick="showPageContent('mastersPage')">Masters Edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/buy-phd-dissertation-service-edit" onclick="showPageContent('phdPage')">PhD Edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
            <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dissertation</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Writing Services</a>
                            <ul id="levelsSubmenu">
                                <li><a href="https://dissertationwritinghelp.net/admin/buy-dissertation-online-edit" onclick="showPageContent('mbaPage')">buy-dissertation-online</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/purchase-dissertations-online-edit" onclick="showPageContent('mastersPage')">Purchase Dissertations Online Edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/dissertation-writing-service-edit" onclick="showPageContent('phdPage')">Dissertation Writing Service</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
             <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dissertation</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Data Analysis</a>
                            <ul id="levelsSubmenu">
                                <li><a href="https://dissertationwritinghelp.net/admin/qualitative-data-dissertation-edit" onclick="showPageContent('mbaPage')">Qualitative Data Dissertation Edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/phd-qualitative-data-analysis-services-edit" onclick="showPageContent('mastersPage')">Phd qualitative data analysis services edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/phd-data-collection-help-edit" onclick="showPageContent('phdPage')">Phd data collection help edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/dissertation-data-analysis-services-edit" onclick="showPageContent('phdPage')">Dissertation data analysis services edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/primary-data-collection-help-edit" onclick="showPageContent('phdPage')">Primary-data-collection-help-edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/spss-data-analysis-services-edit" onclick="showPageContent('phdPage')">Spss data analysis services edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/secondary-data-collection-help-edit" onclick="showPageContent('phdPage')">Secondary data collection Help edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/research-methodology-help-edit" onclick="showPageContent('phdPage')">research-methodology-help edit</a></li>
                                <li><a href="https://dissertationwritinghelp.net/admin/dissertation-viva-counselling-edit" onclick="showPageContent('phdPage')">Dissertation viva counselling</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
               <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dissertation</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Proposal</a>
                            <ul id="levelsSubmenu">
                               <li><a href="https://dissertationwritinghelp.net/admin/masters-dissertation-proposal-help-edit" onclick="showPageContent('phdPage')">Masters Dissertation Proposal help</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/phd-dissertation-proposal-help-edit" onclick="showPageContent('phdPage')">PHD Dissertation Proposal help</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-proposal-help-edit" onclick="showPageContent('phdPage')">Dissertation Proposal help</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/research-proposal-writing-service-edit" onclick="showPageContent('phdPage')">Research Proposal writing</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/business-management-dissertation-help-edit" onclick="showPageContent('phdPage')">Business management dissertation help</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/digital-marketing-dissertation-help-edit" onclick="showPageContent('phdPage')">Digital Marketing Dissertation Help Edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/social-media-marketing-dissertation-help-edit" onclick="showPageContent('phdPage')">Social Media Marketing Dissertation Help Edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
             <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dissertation</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Other</a>
                            <ul id="levelsSubmenu">
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-abstract-writing-service-edit" onclick="showPageContent('phdPage')">Dissertation abstract writing service edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-introduction-writing-edit" onclick="showPageContent('phdPage')">Dissertation introduction writing edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-chapter-writing-services-edit" onclick="showPageContent('phdPage')">Dissertation Chapter Writing Services edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/literature-review-help-edit" onclick="showPageContent('phdPage')">Literature review help</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-methodology-help-edit" onclick="showPageContent('phdPage')">Dissertation-methodology-help-edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-discussion-writing-edit" onclick="showPageContent('phdPage')">Dissertation-discussion-writing-edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-presentation-writing-services-edit" onclick="showPageContent('phdPage')">dissertation-presentation-writing-services-edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-poster-design-services-edit" onclick="showPageContent('phdPage')">dissertation-poster-design-services-edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-poster-writing-services-edit" onclick="showPageContent('phdPage')">dissertation-poster-writing-services-edit</a></li>
                               <li><a href="https://dissertationwritinghelp.net/admin/dissertation-formatting-service-edit" onclick="showPageContent('phdPage')">dissertation-formatting-service-edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
              <!-- Dissertation Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Proofreading</a>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="dropbtn" onclick="toggleSubmenu('levelsSubmenu')">Services</a>
                            <ul id="levelsSubmenu">
                                <li><a href="https://dissertationwritinghelp.net/admin/dissertation-editing-and-proofreading-services-edit" onclick="showPageContent('phdPage')">dissertation-editing-and-proofreading-services-edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Dissertation Dropdown -->
        </ul>
    </div>
</div>

<script>
    // Show/hide content
    function showPageContent(pageId) {
        var page = document.getElementById(pageId);
        if (page) {
            page.style.display = page.style.display === "block" ? "none" : "block";
        }
    }
</script>

</body>
</html>
