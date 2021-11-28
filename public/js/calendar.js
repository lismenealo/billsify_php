

// register templates
var templates = {
    popupIsAllDay: function() {
        return 'All Day';
    },
    popupStateFree: function() {
        return 'Free';
    },
    popupStateBusy: function() {
        return 'Busy';
    },
    titlePlaceholder: function() {
        return 'Subject';
    },
    locationPlaceholder: function() {
        return 'Location';
    },
    startDatePlaceholder: function() {
        return 'Start date';
    },
    endDatePlaceholder: function() {
        return 'End date';
    },
    popupSave: function() {
        return 'Save';
    },
    popupUpdate: function() {
        return 'Update';
    },
    popupDetailDate: function(isAllDay, start, end) {
        var isSameDate = moment(start).isSame(end);
        var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

        if (isAllDay) {
            return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
        }

        return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
    },
    popupDetailLocation: function(schedule) {
        return 'Location : ' + schedule.location;
    },
    popupDetailUser: function(schedule) {
        return 'User : ' + (schedule.attendees || []).join(', ');
    },
    popupDetailState: function(schedule) {
        return 'State : ' + schedule.state || 'Busy';
    },
    popupDetailRepeat: function(schedule) {
        return 'Repeat : ' + schedule.recurrenceRule;
    },
    popupDetailBody: function(schedule) {
        return 'Body : ' + schedule.body;
    },
    popupEdit: function() {
        return 'Edit';
    },
    popupDelete: function() {
        return 'Delete';
    }
};

var cal = new tui.Calendar('#calendar', {
    defaultView: 'month',
    template: templates,
    useCreationPopup: true,
    useDetailPopup: true
});

cal.on('beforeCreateSchedule', function(event) {
    var startTime = event.start;
    var endTime = event.end;
    var isAllDay = event.isAllDay;
    var guide = event.guide;
    var triggerEventName = event.triggerEventName;
    var schedule = {
        calendarId: 1
    };

    if (triggerEventName === 'click') {
        // open writing simple schedule popup
        console.log('click')
    } else if (triggerEventName === 'dblclick') {
        // open writing detail schedule popup
        console.log('dblclick')
    }

    console.log(event);

    cal.createSchedules([schedule]);
});

document.getElementById('move-next').addEventListener('click', function (){
    cal.next();
});

document.getElementById('move-prev').addEventListener('click', function (){
    cal.prev();
});

document.getElementById('move-today').addEventListener('click', function (){
    cal.today();
});