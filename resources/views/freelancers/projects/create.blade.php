@extends('freelancers.layouts.lay')

@section('content')
<v-card flat id="create">
    <v-toolbar color="primary" dark extended flat style="height: 50vh;text-align: center;">
        <v-spacer></v-spacer>
        <h3>Tell us what you need done</h3>
        <p style="width: 70%;margin: auto;margin-top: 30px">Contact skilled freelancers within minutes. View profiles,
            ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.
        </p>
        <v-spacer></v-spacer>
    </v-toolbar>

    <v-card class="mx-auto" max-width="700" style="margin-top: -64px;">

        <v-card-text>
            <form action="#">
                <div class="form-group">

                    <v-text-field label="Choose a name for your project"></v-text-field>
                    <v-textarea autocomplete="email" label="Description"></v-textarea>

                    <h2>What skills are required?</h2>
                    <small>Enter up to 5 skills that best describe your project. Freelancers will use these skills to
                        find projects they are most interested and experienced in.</small>
                    <v-select :items="items" attach chips label="Skills" multiple></v-select>

                    <v-btn text color="primary">Post</v-btn>
            </form>
            </div>

        </v-card-text>
    </v-card>
</v-card>
@endsection
