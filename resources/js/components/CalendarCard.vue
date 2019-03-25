<template>
    <div>
        <article class="card-calendar">
            <div class="container">
                <div class="row card-calendar-date">
                    <p class="card-calendar-day">{{ day(calendarData.event_date) }}</p>
                    <p class="card-calendar-month">{{ month(calendarData.event_date) }}</p>
                </div>
                <div class="row card-calendar-info">
                    <h3 class="card-calendar-title">{{ calendarData.title }}</h3>
                    <p class="card-calendar-description">{{ calendarData.description }}</p>
                </div>
                <div class="row card-calendar-image">
                    <!-- TODO: little zoom in effect on image hover, see Stanford and Tubik as examples -->
                    <a :href="'/events/'+calendarData.id"><img :src="calendarData.image" alt="#"></a>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        name: "CalendarCard",
        props: ['calendarData'],
        methods: {
            day: function (date) {
                return moment(date, 'YYYY-MM-DD').format('DD');
            },
            month: function (date) {
                return moment(date, 'YYYY-MM-DD').format('MMMM')
            }
        }
    };
</script>
