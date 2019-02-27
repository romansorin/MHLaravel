<template>
    <div class="col-3">
        <article class="card-calendar" id="one">
            <div class="container">
                <div class="row card-calendar-date">
                    <p class="card-calendar-day">{{ data[0].date }}</p>
                    <p class="card-calendar-month">{{ data[0].month }}</p>
                </div>
                <div class="row card-calendar-info">
                    <h3 class="card-calendar-title">{{ data[0].title }}</h3>
                    <p class="card-calendar-description">{{ data[0].description }}</p>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    let data = [
        {date: 24, month: 'January', title: "Title", description: "Info"}
    ];

    export default {
        name: "CalendarCard",
        data() {
            return {data}
        }
    }
</script>
