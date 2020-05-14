<template>
    <div>
        <div class="form-group row">
            <label
                for="member_name"
                class="col-md-4 col-form-label text-md-right"
            >
                Імя учасника(-ів)
            </label>

            <div class="col-md-6">
                <div v-for="n in users" :key="n">
                    <input
                        id="member_name"
                        type="text"
                        class="form-control mb-3"
                        name="member_name"
                        required
                    />
                </div>

                <button @click.prevent="clickHandler" id="button">Додати учасника</button>
            </div>
        </div>
    </div>
</template>

<script>
import Button from "./Button";

export default {
    name: "group-users",

    components: {
        Button
    },

    data() {
        return {
            users: 1,
        };
    },

    methods: {
        clickHandler() {
            console.log(this.users);
            
            this.users = this.users + 1;
        }
    }
};
</script>

<style lang="scss" scoped>
    @import '../../sass/app';

	#button {
		background-color: $black;
        color: #ffffff;
        padding: 0.7rem;
        border: none;
        border-radius: 3px;

		&:hover {
			background-color: $gray;
		}
	}
</style>