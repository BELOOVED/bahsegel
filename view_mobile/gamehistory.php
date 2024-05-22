<?php
if ($detect->isMobile()) {?>
<div class="heading">Bahis Geçmişi</div>
<div id="content" class="bgMain account_content">
    <div class="filter-block">
<form action="/Account/GameHistory" id="searchForm" method="post" novalidate="novalidate">
<div class="search_popup_row">
        <label for="period">Dönem seçin:</label>

    <div class="ui-select"><div id="period-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="drop-down">Son 7 Gün</span><select class="drop-down valid" data-val="false" data-val-number="The field PeriodId must be a number." data-val-required="The PeriodId field is required." id="period" name="PeriodId" aria-invalid="false"><option value="1">Son 7 Gün</option>
<option value="2">Son 14 Gün</option>
<option value="3">Son 30 Gün</option>
<option value="4">Tarih Aralığı</option>
</select></div></div>
</div>
<div class="search_popup_row">
        <label for="start-date">Başlangıç tarihi:</label>

    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="date-picker hasDatepicker" data-val="true" data-val-regex="Yanlış tarih" data-val-regex-pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" data-val-required="Bu alan gereklidir." id="start-date" name="TimeRange.StartDate" required="required" type="text" value="05/11/2023" aria-required="true" readonly="readonly"></div>
    <p>
        <span class="field-validation-valid" data-valmsg-for="TimeRange.StartDate" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
<div class="search_popup_row">
    <label for="end-date">Son Tarih:</label>
    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="date-picker hasDatepicker" data-val="true" data-val-greaterdate="Son tarih,  başlangıç tarihinden büyük olmalıdır." data-val-greaterdate-other="StartDate" data-val-regex="Yanlış tarih" data-val-regex-pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" data-val-required="Bu alan gereklidir." id="end-date" name="TimeRange.EndDate" required="required" type="text" value="12/11/2023" aria-required="true" readonly="readonly"></div>
    <p>
        <span class="field-validation-valid" data-valmsg-for="TimeRange.EndDate" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
<div class="search_popup_row">
    <button class="cashier__history_show btn_prim width_all ui-btn ui-shadow ui-corner-all" type="submit" id="search_button">Ara</button>
</div>
<input data-val="true" data-val-number="The field Page must be a number." data-val-required="The Page field is required." id="pageNumber" name="Paging.Page" type="hidden" value="1">

<script type="text/javascript">
    var isDtPickerDisabled = true;
    $('#search_button').on("click", function () {
        $('#pageNumber').val(0);

    });

    $(function() {
        initPeriod();
    });

    $.validator.unobtrusive
        .adapters.addSingleVal("greaterdate", "other");

    $.validator.addMethod("greaterdate",
        function(endVal, element, other) {
            var modelPrefix = element.name.substr(
                0, element.name.lastIndexOf(".") + 1);
            var startVal = $("[name='" + modelPrefix + other + "']").val();
            if (endVal && startVal) {
                var split = startVal.split('/');
                var startDate = new Date(split[2], split[1] - 1, split[0]);
                split = endVal.split('/');
                var endDate = new Date(split[2], split[1] - 1, split[0]);
                if (startDate >= endDate) {
                    return false;
                }
            }
            return true;
        }
    );
    $('#transactiontype').on('change', function () {
        if ($(this).val() == 4) {
            $(this).closest("form").attr('action', '/Account/BalanceAdjustmentsHistory');
        } else if($(this).val() == 5) {
            $(this).closest("form").attr('action', '/Account/PendingWithdrawals');
        }else if($(this).val() == 6) {
            $(this).closest("form").attr('action', '/Account/TournamentRebuyHistory');
        }else if($(this).val() == 7) {
            $(this).closest("form").attr('action', '/Account/OtherTransactionsHistory');
        }else {
            $(this).closest("form").attr('action', '/Account/TransactionsHistory');
        }

    });

       /* DatePicker Mob*/
    if ($(".date-picker").length) {

        $(".date-picker").datepicker({
            dateFormat: 'dd/mm/yy',
            dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            beforeShow: function () {
                return !isDtPickerDisabled;
            }
        });
    }


    function initPeriod() {
        $('#period').on('change', function () {

            var selectedValue = parseInt($(this).val());

            var startDate = $("#start-date");
            var endDate = $("#end-date");
            var allDates = $("#start-date, #end-date");

            var date;

            if (selectedValue == 3)
                date = '13/10/2023';
            else if (selectedValue == 2)
                date = '29/10/2023';
            else if (selectedValue == 1)
                date = '05/11/2023';
            else if (selectedValue == 0)
                date = '11/11/2023';


            isDtPickerDisabled = selectedValue != 4;
            if (isDtPickerDisabled) {
                allDates.attr('readonly', 'readonly');
                startDate.datepicker('setDate', date);
                startDate.attr('value', date);
                date = '12/11/2023';
                endDate.datepicker('setDate', date);
                endDate.attr('value', date);
            } else {
                allDates.removeAttr('readonly');
            }
        });
        $(document).ready(function () { $('#period').trigger('change'); })

    }

</script>

</form>    </div>
    <div class="clean-table game_history">
                <div>
                    <table class="tbl-list tbl">
                        <tbody>
                            <tr class="accRowClr">
                                <td>ID:</td>
                                <td>24955186310</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Oyun:</td>
                                <td>Sweet Bonanza™</td>
                            </tr>

                            <tr class="accRowClr">
                                <td>Tarih</td>
                                <td>
                                    10/11/2023 19:9
                                </td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Bahis:</td>
                                <td>1 TRY</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Kazanan</td>
                                <td>0 TRY</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="game_history_more_table_block" style="display:none"></div>
                    <div class="more-btn" data-betid="24955186310" data-creattime="638352401814793766">
                    </div>
                </div>
                <div>
                    <table class="tbl-list tbl">
                        <tbody>
                            <tr class="accRowClr">
                                <td>ID:</td>
                                <td>24955175825</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Oyun:</td>
                                <td>Sweet Bonanza™</td>
                            </tr>

                            <tr class="accRowClr">
                                <td>Tarih</td>
                                <td>
                                    10/11/2023 19:9
                                </td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Bahis:</td>
                                <td>1 TRY</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Kazanan</td>
                                <td>1 TRY</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="game_history_more_table_block" style="display:none"></div>
                    <div class="more-btn" data-betid="24955175825" data-creattime="638352401703214674">
                    </div>
                </div>
                <div>
                    <table class="tbl-list tbl">
                        <tbody>
                            <tr class="accRowClr">
                                <td>ID:</td>
                                <td>24955172345</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Oyun:</td>
                                <td>Sweet Bonanza™</td>
                            </tr>

                            <tr class="accRowClr">
                                <td>Tarih</td>
                                <td>
                                    10/11/2023 19:9
                                </td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Bahis:</td>
                                <td>1 TRY</td>
                            </tr>
                            <tr class="accRowClr">
                                <td>Kazanan</td>
                                <td>0 TRY</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="game_history_more_table_block" style="display:none"></div>
                    <div class="more-btn" data-betid="24955172345" data-creattime="638352401666118285">
                    </div>
                </div>



<script>
    function DeleteMessage(msgId) {
        $.ajax({
            url: "/tr/Account/DeleteInboxMessage",
            type: "POST",
            data: { messageId: msgId },
            datatype: "json",
            success: function (reult) {
                $("#pageNumber").val(Math.ceil((3-1) / 10));
                $('#searchForm').submit();

            }
        });
    }

    $('.delete_icon').on('click',
        function(e) {
            e.preventDefault();
            var msgId = $(this).attr('data-delete-message-id');
            DeleteMessage(msgId);
        });

</script>    </div>
</div>
<?php }else{?>

<?php }?>