<template>
    <div>
        <div class="progress">
            <progressbar :now="progress" type="success" striped animated></progressbar>
        </div>

        <div class="order-status">
            <strong>Order Status:</strong> {{ statusNew }}
        </div>

        <strong>Estimated Time Remaining:</strong>  {{ timeLeft }} remaining...




    </div>
</template>

<script>
    import { progressbar } from 'vue-strap'
    export default {
        components: {
            progressbar
        },
        props: ['status', 'initial', 'order_id'],
        data() {
            return {
                statusNew: this.status,
                progress: this.initial,
                time: 1800, //in seconds
                timer: null,

            }
        },
        mounted() {
            Echo.private('order-track.' + this.order_id)
                .listen('OrderStatusChanged', (order) => {
                    this.statusNew = order.status_name
                    this.progress = order.status_percent
                });
        },

        methods: {
            decrementOrAlert () {
                if (this.time > 0) {
                    this.time--
                    return
                }

                alert("Time is up!")
                clearInterval(this.timer)
            }
        },

        computed: {
            timeLeft () {
                return `${this.minutes} minutes ${this.seconds} seconds`
            },
            minutes () {
                return String(Math.floor(this.time / 60)).padStart(2, '0')
            },
            seconds () {
                return String(this.time % 60).padStart(2, '0')
            }
        },
        created () {
            this.timer = setInterval(this.decrementOrAlert, 1000)
        }





    }
</script>
