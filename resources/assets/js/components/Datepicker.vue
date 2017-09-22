<template>
    <b-field label="Select a date">
        <b-datepicker
            icon="today" 
            name="tanggal_lahir" 
            value="" 
            placeholder="Click to select...">
        </b-datepicker>
    </b-field>
</template>

<script>
    export default {
        props: ['value'],
        mounted() {
            value: this.value
        },
        data() {
            const today = new Date()
            return {
                value: this.value
            }
        }
    }
</script>