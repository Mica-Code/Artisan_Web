<div class="col-md-12">
    <div class="card card-primary" id="noprinter" style=" margin: auto; width: 90%;">

                <form method="post">
                    <input type="hidden" id="hdda" asp-for="Input.AreaOffice">
                    <input type="hidden" id="hddb" asp-for="Input.year">
                    <div class="justify-content-center" style="margin-left:40%; margin-top:3%; margin-bottom:3%">
                        <button type="button" id="btndowloadreportpdf" style="background-color:orange" class="btn btn-info">
                            Download to pdf
                        </button>
                        <button type="submit" id="btndowloadreportexce" asp-page-handler="ex" style="background-color:darkcyan" class="btn btn-info">
                            Download to Excel
                        </button>
                    </div>
                </form>

                <div class="paragraphs" style="margin:auto">

                    <div class="row" style=" margin-top:2%">
                        <div class="span4" style="margin-left:-2%">
                            <img style="margin:auto;float:left; margin-left:-5%" src="~/website/img/new.jpeg" />
                            <div class="content-heading">
                                <h1 class="" style="font-size:30px; width:125%; font-weight:100;">

                                        <strong style="margin-top:3%; font-family:Arial; font-weight:bold; font-size:40px">
                                            <span style="margin-left:8%">@Model.CompInfo.Cname.ToUpper()</span><br />
                                        </strong>
                                        <strong style="margin-top:5%;margin-left:25%; font-weight:bold; font-family:Arial; font-size:large">
                                            <span>@Model.CompInfo.Caddress</span><br />
                                        </strong>

                                        <strong style="margin-top:3%; font-family:Arial; font-weight:bold; font-size:40px">
                                            <span style="margin-left:4%">INDUSTRIAL TRAINING FUND</span><br />
                                        </strong>
                                        <strong style="margin-top:-3%;margin-left:25%; font-weight:bold; font-family:Arial; font-size:large">
                                            <span>ALONG MIANGO ROAD, JOS, NIGERIA </span><br />
                                        </strong>
                                    
                                </h1>
                            </div>
                            <p style="clear:both"></p>
                        </div>
                    </div>

                </div>

                <div style="margin-top:1%; margin-bottom:1.5%">
                    <span style="text-transform:uppercase"><strong>report name: </strong>Demand Notice Report</span><br />
                    <span style="text-transform:uppercase"><strong>TRAINING CONTRIBUTION YEAR: </strong>@Model.Input.year</span><br />
                    <span style="text-transform:uppercase"><strong>Total Sent: </strong>

                    </span>
                    <br />
                    <span style="text-transform:uppercase">
                        <strong>Office:</strong>

                            <span>ALL OFFICES</span>
                            <span style="text-transform:uppercase"></span>

                    </span>
                </div>
                <div class="col-md-4" style="display:none">
                    <div class="form-group">
                        <div class="input-group ui-widget">
                            <input id="BtnSearch" placeholder="Search" class="form-control" type="text">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:table; margin:auto; width:100%;">
                    <table id="demandtb" class="table table-bordered">
                        <thead style="background-color:steelblue; color:white;  text-transform:uppercase">
                            <tr>
                                <th style="text-align:center">S/N</th>
                                <th style="text-align:center">Company Name</th>
                                <th style="text-align:center">Email</th>
                                <th style="text-align:center">DemandNotice Status</th>
                                <th style="text-align:center">Date Sent</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="se_no @i" style="width:0.25%;" text-align:left">@i</td>
                                <td style="width:30%; color:green; text-align:left" searchable @i>@item.CompName</td>
                                <td style="width:20%; text-align:left" searchable @i>@item.Email</td>
                                <td style="width:20%; text-align:left" searchable @i>@item.DemandStatus</td>
                                <td style="width:20%; text-align:left" searchable @i>@item.DateSent</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div id="div1" runat="server" class="alert alert-info alert-styled-left alert-arrow-left alert-component">
                    <h1 runat="server" id="h1norecords" style="font-size: 20px" clientidmode="Static"> No record for your selection please check</h1>
                </div>

            <div id="div1" runat="server" class="alert alert-info alert-styled-left alert-arrow-left alert-component">
                <h1 runat="server" id="h1norecords" style="font-size: 20px" clientidmode="Static"> No record for your selection please check</h1>
            </div>
    </div>
</div>