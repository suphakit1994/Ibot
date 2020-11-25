<style>
    .card {
        box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 4px 5px 0 rgba(0, 0, 0, 0.19);
        width: 100%;
        padding-bottom: 10px;
    }
	.retangled-blue{
		background-color: #0056f7;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-pink{
		background-color: #FF5894;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-black{
		background-color: #050a17;
		position: absolute;
		height:15px;
		width:15px;
	}
	.calendar-day {
		width: 100px;
		min-width: 100px;
		max-width: 100px;
		height: 80px;
	}
		.calendar-table {
		margin: 0 auto;
		width: 700px;
	}
		.selected {
		background-color: #eee;
	}
		.outside .date {
		color: #ccc;
	}
		.timetitle {
		white-space: nowrap;
		text-align: right;
	}
		.event {
		border-top: 1px solid #b2dba1;
		border-bottom: 1px solid #b2dba1;
		background-image: linear-gradient(to bottom, #dff0d8 0px, #c8e5bc 100%);
		background-repeat: repeat-x;
		color: #3c763d;
		border-width: 1px;
		font-size: 0.75em;
		padding: 0 0.75em;
		line-height: 2em;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		margin-bottom: 1px;
	}
		.event.begin {
		border-left: 1px solid #b2dba1;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
		.event.end {
		border-right: 1px solid #b2dba1;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
		.event.all-day {
		border-top: 1px solid #9acfea;
		border-bottom: 1px solid #9acfea;
		background-image: linear-gradient(to bottom, #d9edf7 0px, #b9def0 100%);
		background-repeat: repeat-x;
		color: #31708f;
		border-width: 1px;
	}
		.event.all-day.begin {
		border-left: 1px solid #9acfea;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
		.event.all-day.end {
		border-right: 1px solid #9acfea;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
		.event.clear {
		background: none;
		border: 1px solid transparent;
	}
		.table-tight > thead > tr > th,
		.table-tight > tbody > tr > th,
		.table-tight > tfoot > tr > th,
		.table-tight > thead > tr > td,
		.table-tight > tbody > tr > td,
		.table-tight > tfoot > tr > td {
		padding-left: 0;
		padding-right: 0;
	}
		.table-tight-vert > thead > tr > th,
		.table-tight-vert > tbody > tr > th,
		.table-tight-vert > tfoot > tr > th,
		.table-tight-vert > thead > tr > td,
		.table-tight-vert > tbody > tr > td,
		.table-tight-vert > tfoot > tr > td {
		padding-top: 0;
		padding-bottom: 0;
	}
</style>

<body>

    <div class="container" style="width:95% ; margin-top:2%; margin-bottom:2%;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%;margin-top:2%;">
                                <img style="border-radius:3%; width:150px; height:215px;" src="../images/e.jpg" >
                            </div>
                            <div class="col-md-5 " style="margin-top:20%; pading-left:0	%;">
                                <p style="text-align: left; font-size:16px;"><b>Svetiana Anyukova</b></p>
                                <p style="text-align: left;">Teacher Assistance</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%;">
                                <a class="Button"
                                    style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);border: 1px solid #ffffff;">Check
                                    In</a>
                            </div>
                            <div class="col-md-5" style="pading-left:0%;">
                                <a class="Button"
                                    style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: #ffffff; border: 1px solid #000000; color:black;">Take
                                    a leave</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%; margin-top:6%;">
                                <p style="font-size: 15px;"><b>Sat 7 Oct 2020</b></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5" style="margin-top: 5%;margin-left:2%;">
                                <p style="font-size: 15px;"><b>Attend</b></p>
                            </div>
                            <div class="col-md-5" >
                                <p style="text-align: left; pading-left:0%;margin-top: 14%; font-size: 15px;"><b>Out</b></p>
                    </div>
                </div>
    
                <div class=" row">
                                <div class="col-md-5" style="margin-left:2%; margin-top:5%;">
                                    <p style="font-size: 30px"><b>10:00 AM</b></p>
                                </div>
                                <div class="col-md-5" style="pading-left:0%; margin-top:5%;">
									<p style="font-size: 30px"><b>-</b></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5" style="margin-top: 5%;margin-left:2%;">
                                    <p style="font-size: 15px;"><b>Detail</b></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5" style="margin-left:2%">
                                    <p>Availability:</p>
                                    <p>Age:</p>
                                    <p>Work Time:</p>
                                </div>
                                <div class="col-md-5">
                                    <p style="text-align: left; pading-left:0%;">Part time</p>
                                    <p style="text-align: left; pading-left:0%;">25 years old</p>
                                    <p style="text-align: left; pading-left:0%;">Sat 10:30-12:00 ฿ 75/Day</p>
                                    <p style="text-align: left; pading-left:0%;">Sun 10:30-12:00 ฿ 75/Day</p>
                                </div>
                            </div>

							<div class="row">
								<div class="col-md-12" style="margin-top:10%;">
									<div class="row">
									<div class="col-md-3" style="margin-left:4%;">
									<div class="row">
										<div class="retangled-blue" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Attended</p></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="retangled-pink" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Take a leave</p></div>
									</div>	
								</div>
								<div class="col-md-3">
									<div class="row">
										<div class="retangled-black" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Schedule</p></div>
									</div>	
								</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- -------------------------------------------------    -------------------------------------------------    -------------------------------------------------    -->
                <div class="col-md-7" style="margin-left:1%">
                    <div class=" theme-showcase">
                        <div id="holder" class="row"></div>
                    </div>
                </div>
                <script type="text/tmpl" id="tmpl">
            {{
            var date = date || new Date(),
                month = date.getMonth(), 
                year = date.getFullYear(), 
                first = new Date(year, month, 1), 
                last = new Date(year, month + 1, 0),
                startingDay = first.getDay(), 
                thedate = new Date(year, month, 1 - startingDay),
                dayclass = lastmonthcss,
                today = new Date(),
                i, j; 
            if (mode === 'week') {
              thedate = new Date(date);
              thedate.setDate(date.getDate() - date.getDay());
              first = new Date(thedate);
              last = new Date(thedate);
              last.setDate(last.getDate()+6);
            } else if (mode === 'day') {
              thedate = new Date(date);
              first = new Date(thedate);
              last = new Date(thedate);
              last.setDate(thedate.getDate() + 1);
            }
            
            }}
            <table class="calendar-table table table-condensed table-tight">
              <thead>
                <tr>
                  <td colspan="7" style="text-align: center">
                    <table style="white-space: nowrap; width: 100%">
                      <tr>
                        <td style="text-align: left;">
                          <span class="btn-group">
                            <button class="js-cal-prev btn btn-default">&lt;</button>
                            <button class="js-cal-next btn btn-default">&gt;</button>
                          </span>
                          <button class="js-cal-option btn btn-default {{: first.toDateInt() <= today.toDateInt() && today.toDateInt() <= last.toDateInt() ? 'active':'' }}" data-date="{{: today.toISOString()}}" data-mode="month">{{: todayname }}</button>
                        </td>
                        <td>
                          <span class="btn-group btn-group-lg">
                            {{ if (mode !== 'day') { }}
                            {{ if (mode === 'month') { }}<button class="js-cal-option btn btn-link" data-mode="year">{{: months[month] }}</button>{{ } }}
                            {{ if (mode ==='week') { }}
                            <button class="btn btn-link disabled">{{: shortMonths[first.getMonth()] }} {{: first.getDate() }} - {{: shortMonths[last.getMonth()] }} {{: last.getDate() }}</button>
                            {{ } }}
                            <button class="js-cal-years btn btn-link">{{: year}}</button>
                            {{ } else { }}
                            <button class="btn btn-link disabled">{{: date.toDateString() }}</button>
                            {{ } }}
                          </span>
                        </td>
                        <td style="text-align: right">
                          <span class="btn-group">
                            <button class="js-cal-option btn btn-default {{: mode==='year'? 'active':'' }}" data-mode="year">Year</button>
                            <button class="js-cal-option btn btn-default {{: mode==='month'? 'active':'' }}" data-mode="month">Month</button>
                            <button class="js-cal-option btn btn-default {{: mode==='week'? 'active':'' }}" data-mode="week">Week</button>
                            <button class="js-cal-option btn btn-default {{: mode==='day'? 'active':'' }}" data-mode="day">Day</button>
                          </span>
                        </td>
                      </tr>
                    </table>
          
                  </td>
                </tr>
              </thead>
              {{ if (mode ==='year') {
                month = 0;
              }}
              <tbody>
                {{ for (j = 0; j < 3; j++) { }}
                <tr>
                  {{ for (i = 0; i < 4; i++) { }}
                  <td class="calendar-month month-{{:month}} js-cal-option" data-date="{{: new Date(year, month, 1).toISOString() }}" data-mode="month">
                    {{: months[month] }}
                    {{ month++;}}
                  </td>
                  {{ } }}
                </tr>
                {{ } }}
              </tbody>
              {{ } }}
              {{ if (mode ==='month' || mode ==='week') { }}
              <thead>
                <tr class="c-weeks">
                  {{ for (i = 0; i < 7; i++) { }}
                  <th class="c-name">
                    {{: days[i] }}
                  </th>
                  {{ } }}
                </tr>
              </thead>
              <tbody>
                {{ for (j = 0; j < 6 && (j < 1 || mode === 'month'); j++) { }}
                <tr>
                  {{ for (i = 0; i < 7; i++) { }}
                  {{ if (thedate > last) { dayclass = nextmonthcss; } else if (thedate >= first) { dayclass = thismonthcss; } }}
                  <td class="calendar-day {{: dayclass }} {{: thedate.toDateCssClass() }} {{: date.toDateCssClass() === thedate.toDateCssClass() ? 'selected':'' }} {{: daycss[i] }} js-cal-option" data-date="{{: thedate.toISOString() }}">
                    <div class="date">{{: thedate.getDate() }}</div>
                    {{ thedate.setDate(thedate.getDate() + 1);}}
                  </td>
                  {{ } }}
                </tr>
                {{ } }}
              </tbody>
              {{ } }}
              {{ if (mode ==='day') { }}
              <tbody>
                <tr>
                  <td colspan="7">
                    <table class="table table-striped table-condensed table-tight-vert">
                      <thead>
                        <tr>
                          <th>&nbsp;</th>
                          <th style="text-align: center; width: 100%">{{: days[date.getDay()] }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th class="timetitle">All Day</th>
                          <td class="{{: date.toDateCssClass() }}"> </td>
                        </tr>
                        <tr>
                          <th class="timetitle">Before 6 AM</th>
                          <td class="time-0-0"> </td>
                        </tr>
                        {{for (i = 6; i < 22; i++) { }}
                        <tr>
                          <th class="timetitle">{{: i <= 12 ? i : i - 12 }} {{: i < 12 ? "AM" : "PM"}}</th>
                          <td class="time-{{: i}}-0"> </td>
                        </tr>
                        <tr>
                          <th class="timetitle">{{: i <= 12 ? i : i - 12 }}:30 {{: i < 12 ? "AM" : "PM"}}</th>
                          <td class="time-{{: i}}-30"> </td>
                        </tr>
                        {{ } }}
                        <tr>
                          <th class="timetitle">After 10 PM</th>
                          <td class="time-22-0"> </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
              {{ } }}
            </table>
          </script>
                <script>
                    var $currentPopover = null;
                    $(document)
                        .on("shown.bs.popover", function (ev) {
                            var $target = $(ev.target);
                            if ($currentPopover && $currentPopover.get(0) != $target.get(0)) {
                                $currentPopover.popover("toggle");
                            }
                            $currentPopover = $target;
                        })
                        .on("hidden.bs.popover", function (ev) {
                            var $target = $(ev.target);
                            if ($currentPopover && $currentPopover.get(0) == $target.get(0)) {
                                $currentPopover = null;
                            }
                        });


                    $.extend({
                        quicktmpl: function (template) {
                            return new Function(
                                "obj",
                                "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" +
                                template
                                    .replace(/[\r\t\n]/g, " ")
                                    .split("{{")
                                    .join("\t")
                                    .replace(/((^|\}\})[^\t]*)'/g, "$1\r")
                                    .replace(/\t:(.*?)\}\}/g, "',$1,'")
                                    .split("\t")
                                    .join("');")
                                    .split("}}")
                                    .join("p.push('")
                                    .split("\r")
                                    .join("\\'") +
                                "');}return p.join('');"
                            );
                        }
                    });

                    $.extend(Date.prototype, {
                        toDateCssClass: function () {
                            return (
                                "_" +
                                this.getFullYear() +
                                "_" +
                                (this.getMonth() + 1) +
                                "_" +
                                this.getDate()
                            );
                        },
                        toDateInt: function () {
                            return (this.getFullYear() * 12 + this.getMonth()) * 32 + this.getDate();
                        },
                        toTimeString: function () {
                            var hours = this.getHours(),
                                minutes = this.getMinutes(),
                                hour = hours > 12 ? hours - 12 : hours,
                                ampm = hours >= 12 ? " pm" : " am";
                            if (hours === 0 && minutes === 0) {
                                return "";
                            }
                            if (minutes > 0) {
                                return hour + ":" + minutes + ampm;
                            }
                            return hour + ampm;
                        }
                    });

                    (function ($) {
                        var t = $.quicktmpl($("#tmpl").get(0).innerHTML);

                        function calendar($el, options) {
                            $el
                                .on("click", ".js-cal-prev", function () {
                                    switch (options.mode) {
                                        case "year":
                                            options.date.setFullYear(options.date.getFullYear() - 1);
                                            break;
                                        case "month":
                                            options.date.setMonth(options.date.getMonth() - 1);
                                            break;
                                        case "week":
                                            options.date.setDate(options.date.getDate() - 7);
                                            break;
                                        case "day":
                                            options.date.setDate(options.date.getDate() - 1);
                                            break;
                                    }
                                    draw();
                                })
                                .on("click", ".js-cal-next", function () {
                                    switch (options.mode) {
                                        case "year":
                                            options.date.setFullYear(options.date.getFullYear() + 1);
                                            break;
                                        case "month":
                                            options.date.setMonth(options.date.getMonth() + 1);
                                            break;
                                        case "week":
                                            options.date.setDate(options.date.getDate() + 7);
                                            break;
                                        case "day":
                                            options.date.setDate(options.date.getDate() + 1);
                                            break;
                                    }
                                    draw();
                                })
                                .on("click", ".js-cal-option", function () {
                                    var $t = $(this),
                                        o = $t.data();
                                    if (o.date) {
                                        o.date = new Date(o.date);
                                    }
                                    $.extend(options, o);
                                    draw();
                                })
                                .on("click", ".js-cal-years", function () {
                                    var $t = $(this),
                                        haspop = $t.data("popover"),
                                        s = "",
                                        y = options.date.getFullYear() - 2,
                                        l = y + 5;
                                    if (haspop) {
                                        return true;
                                    }
                                    for (; y < l; y++) {
                                        s +=
                                            '<button type="button" class="btn btn-default btn-lg btn-block js-cal-option" data-date="' +
                                            new Date(y, 1, 1).toISOString() +
                                            '" data-mode="year">' +
                                            y +
                                            "</button>";
                                    }
                                    $t.popover({ content: s, html: true, placement: "auto top" }).popover(
                                        "toggle"
                                    );
                                    return false;
                                })
                                .on("click", ".event", function () {
                                    var $t = $(this),
                                        index = +$t.attr("data-index"),
                                        haspop = $t.data("popover"),
                                        data,
                                        time;

                                    if (haspop || isNaN(index)) {
                                        return true;
                                    }
                                    data = options.data[index];
                                    time = data.start.toTimeString();
                                    if (time && data.end) {
                                        time = time + " - " + data.end.toTimeString();
                                    }
                                    $t.data("popover", true);
                                    $t.popover({
                                        content: "<p><strong>" + time + "</strong></p>" + data.text,
                                        html: true,
                                        placement: "auto left"
                                    }).popover("toggle");
                                    return false;
                                });
                            function dayAddEvent(index, event) {
                                if (!!event.allDay) {
                                    monthAddEvent(index, event);
                                    return;
                                }
                                var $event = $("<div/>", {
                                    class: "event",
                                    text: event.title,
                                    title: event.title,
                                    "data-index": index
                                }),
                                    start = event.start,
                                    end = event.end || start,
                                    time = event.start.toTimeString(),
                                    hour = start.getHours(),
                                    timeclass = ".time-22-0",
                                    startint = start.toDateInt(),
                                    dateint = options.date.toDateInt(),
                                    endint = end.toDateInt();
                                if (startint > dateint || endint < dateint) {
                                    return;
                                }

                                if (!!time) {
                                    $event.html("<strong>" + time + "</strong> " + $event.html());
                                }
                                $event.toggleClass("begin", startint === dateint);
                                $event.toggleClass("end", endint === dateint);
                                if (hour < 6) {
                                    timeclass = ".time-0-0";
                                }
                                if (hour < 22) {
                                    timeclass =
                                        ".time-" + hour + "-" + (start.getMinutes() < 30 ? "0" : "30");
                                }
                                $(timeclass).append($event);
                            }

                            function monthAddEvent(index, event) {
                                var $event = $("<div/>", {
                                    class: "event",
                                    text: event.title,
                                    title: event.title,
                                    "data-index": index
                                }),
                                    e = new Date(event.start),
                                    dateclass = e.toDateCssClass(),
                                    day = $("." + e.toDateCssClass()),
                                    empty = $("<div/>", { class: "clear event", html: "&nbsp;" }),
                                    numbevents = 0,
                                    time = event.start.toTimeString(),
                                    endday = event.end && $("." + event.end.toDateCssClass()).length > 0,
                                    checkanyway = new Date(e.getFullYear(), e.getMonth(), e.getDate() + 40),
                                    existing,
                                    i;
                                $event.toggleClass("all-day", !!event.allDay);
                                if (!!time) {
                                    $event.html("<strong>" + time + "</strong> " + $event.html());
                                }
                                if (!event.end) {
                                    $event.addClass("begin end");
                                    $("." + event.start.toDateCssClass()).append($event);
                                    return;
                                }

                                while (
                                    e <= event.end &&
                                    (day.length || endday || options.date < checkanyway)
                                ) {
                                    if (day.length) {
                                        existing = day.find(".event").length;
                                        numbevents = Math.max(numbevents, existing);
                                        for (i = 0; i < numbevents - existing; i++) {
                                            day.append(empty.clone());
                                        }
                                        day.append(
                                            $event
                                                .toggleClass("begin", dateclass === event.start.toDateCssClass())
                                                .toggleClass("end", dateclass === event.end.toDateCssClass())
                                        );
                                        $event = $event.clone();
                                        $event.html("&nbsp;");
                                    }
                                    e.setDate(e.getDate() + 1);
                                    dateclass = e.toDateCssClass();
                                    day = $("." + dateclass);
                                }
                            }
                            function yearAddEvents(events, year) {
                                var counts = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                                $.each(events, function (i, v) {
                                    if (v.start.getFullYear() === year) {
                                        counts[v.start.getMonth()]++;
                                    }
                                });
                                $.each(counts, function (i, v) {
                                    if (v !== 0) {
                                        $(".month-" + i).append('<span class="badge">' + v + "</span>");
                                    }
                                });
                            }

                            function draw() {
                                $el.html(t(options));
                                //potential optimization (untested), this object could be keyed into a dictionary on the dateclass string; the object would need to be reset and the first entry would have to be made here
                                $("." + new Date().toDateCssClass()).addClass("today");
                                if (options.data && options.data.length) {
                                    if (options.mode === "year") {
                                        yearAddEvents(options.data, options.date.getFullYear());
                                    } else if (options.mode === "month" || options.mode === "week") {
                                        $.each(options.data, monthAddEvent);
                                    } else {
                                        $.each(options.data, dayAddEvent);
                                    }
                                }
                            }

                            draw();
                        }

                        (function (defaults, $, window, document) {
                            $.extend({
                                calendar: function (options) {
                                    return $.extend(defaults, options);
                                }
                            }).fn.extend({
                                calendar: function (options) {
                                    options = $.extend({}, defaults, options);
                                    return $(this).each(function () {
                                        var $this = $(this);
                                        calendar($this, options);
                                    });
                                }
                            });
                        })(
                            {
                                days: [
                                    "Sunday",
                                    "Monday",
                                    "Tuesday",
                                    "Wednesday",
                                    "Thursday",
                                    "Friday",
                                    "Saturday"
                                ],
                                months: [
                                    "January",
                                    "February",
                                    "March",
                                    "April",
                                    "May",
                                    "June",
                                    "July",
                                    "August",
                                    "September",
                                    "October",
                                    "November",
                                    "December"
                                ],
                                shortMonths: [
                                    "Jan",
                                    "Feb",
                                    "Mar",
                                    "Apr",
                                    "May",
                                    "Jun",
                                    "Jul",
                                    "Aug",
                                    "Sep",
                                    "Oct",
                                    "Nov",
                                    "Dec"
                                ],
                                date: new Date(),
                                daycss: ["c-sunday", "", "", "", "", "", "c-saturday"],
                                todayname: "Today",
                                thismonthcss: "current",
                                lastmonthcss: "outside",
                                nextmonthcss: "outside",
                                mode: "month",
                                data: []
                            },
                            jQuery,
                            window,
                            document
                        );
                    })(jQuery);

                    var data = [],
                        date = new Date(),
                        d = date.getDate(),
                        d1 = d,
                        m = date.getMonth(),
                        y = date.getFullYear(),
                        i,
                        end,
                        j,
                        c = 1063,
                        c1 = 3329,
                        h,
                        m,
                        names = [
                            "All Day Event",
                            "Long Event",
                            "Birthday Party",
                            "Repeating Event",
                            "Training",
                            "Meeting",
                            "Mr. Behnke",
                            "Date",
                            "Ms. Tubbs"
                        ],
                        slipsum = [
                            "Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.",
                            "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.",
                            "Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.",
                            "Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.",
                            "Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year. And the good thing about dogs... is they got different dogs for different people. Like pit bulls. The dog of dogs. Pit bull can be the right man's best friend... or the wrong man's worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me... Raoul. Right, Omar? Give me Raoul.",
                            "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.",
                            "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.",
                            "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.",
                            "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.",
                            "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man."
                        ];

                    for (i = 0; i < 500; i++) {
                        j = Math.max((i % 15) - 10, 0);
                        //c and c1 jump around to provide an illusion of random data
                        c = (c * 1063) % 1061;
                        c1 = (c1 * 3329) % 3331;
                        d = ((d1 + c + c1) % 839) - 440;
                        h = i % 36;
                        m = (i % 4) * 15;
                        if (h < 18) {
                            h = 0;
                            m = 0;
                        } else {
                            h = Math.max(h - 24, 0) + 8;
                        }
                        end = !j ? null : new Date(y, m, d + j, h + 2, m);
                        data.push({
                            title: names[c1 % names.length],
                            start: new Date(y, m, d, h, m),
                            end: end,
                            allDay: !(i % 6),
                            text: slipsum[c % slipsum.length]
                        });
                    }

                    data.sort(function (a, b) {
                        return +a.start - +b.start;
                    });


                    $("#holder").calendar({
                        data: data
                    });

                </script>

            </div>
        </div>

</body>