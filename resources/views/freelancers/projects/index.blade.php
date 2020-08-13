@extends('freelancers.layouts.app')

@section('content')
<v-row>
    <v-col cols="3" sm="3">
        <v-hover v-slot:default="{ hover }" open-delay="200">
            <v-card :elevation="hover ? 16 : 2" class="mx-auto" style="margin-top: -50px;">
                <v-card-text class="font-weight-medium mt-12 subtitle-1">
                    <v-list dense>
                        <v-list-item-group v-model="item" color="primary">
                            <v-list-item>
                                <v-list-item-icon>
                                    <v-icon color="primary">mdi-book</v-icon>
                                </v-list-item-icon>
                                <v-list-item-content>
                                    <v-list-item-title>Projects</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>

                            <v-list-item>
                                <v-list-item-icon>
                                    <v-icon color="primary">mdi-medal</v-icon>
                                </v-list-item-icon>
                                <v-list-item-content>
                                    <v-list-item-title>Contest</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>

                    <p>Project Type</p>
                    <v-checkbox label="Fixed"></v-checkbox>
                    <v-checkbox label="Hourly"></v-checkbox>
                    <label for="">Fixed Price</label>
                    <v-range-slider thumb-label></v-range-slider>
                    <label for="">Hourly Price</label>
                    <v-range-slider thumb-label></v-range-slider>
                </v-card-text>
            </v-card>
        </v-hover>
    </v-col>

    <v-col cols="9" sm="9">
        <v-hover v-slot:default="{ hover }" close-delay="200">
            <v-card :elevation="hover ? 16 : 2" class="mx-auto">
                <v-card-title>
                    <v-text-field label="Search" prepend-icon="mdi-search" hide-details="auto"></v-text-field>
                </v-card-title>
                <v-divider></v-divider>
                <v-card-text class="font-weight-medium mt-12 subtitle-1">
                <div style="margin: 20px 0">
                       <h3 style="color: #000">Essay writing</h3>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque blanditiis voluptas ad hic iste debitis rem asperiores ducimus. Ratione error minus provident temporibus. Optio assumenda illum aperiam sint recusandae?</p>
                       <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
                   </div>
                   <v-divider></v-divider>

                <div style="margin: 20px 0">
                       <h3 style="color: #000">Essay writing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque blanditiis voluptas ad hic iste debitis rem asperiores ducimus. Ratione error minus provident temporibus. Optio assumenda illum aperiam sint recusandae?</p>
                    <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
                </div>
                <v-divider></v-divider>

                <div style="margin: 20px 0">
                    <h3 style="color: #000">Article</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque blanditiis voluptas ad hic iste debitis rem asperiores ducimus. Ratione error minus provident temporibus. Optio assumenda illum aperiam sint recusandae?</p>
                    <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
                </div>
                <v-divider></v-divider>
                <div style="margin: 20px 0">
                    <h3 style="color: #000">Essay writing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque blanditiis voluptas ad hic iste debitis rem asperiores ducimus. Ratione error minus provident temporibus. Optio assumenda illum aperiam sint recusandae?</p>
                    <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
                </div>
                <v-divider></v-divider>

             <div style="margin: 20px 0">
                    <h3 style="color: #000">Essay writing</h3>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic reiciendis officia dolore tempora ea, vero et repellendus harum. Ad modi ullam aperiam omnis corporis asperiores ipsa cumque vel dolores maxime.</p>
                 <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
             </div>
             <v-divider></v-divider>

             <div style="margin: 20px 0">
                 <h3 style="color: #000">Article</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque blanditiis voluptas ad hic iste debitis rem asperiores ducimus. Ratione error minus provident temporibus. Optio assumenda illum aperiam sint recusandae?</p>
                 <v-icon color="primary">mdi-medal</v-icon> <span><b style="color: #63bd63">OPEN</b> 10 min ago - 10 bids</span>
             </div>
             <v-divider></v-divider>

                </v-card-text>
            </v-card>
        </v-hover>
    </v-col>
</v-row>
@endsection
