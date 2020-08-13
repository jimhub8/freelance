<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Freelancer</title>
</head>

<body>
    <div id="app">

        <v-main>
            <v-app>
                <v-app-bar absolute color="primary" dark inverted-scroll scroll-target="#scrolling-techniques-8">
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                    <v-btn text>Logo</v-btn>
                    <v-btn text>
                        <v-icon>mdi-magnify</v-icon>
                        Browse
                    </v-btn>

                    <v-btn text>
                        <v-icon>mdi-desktop-mac</v-icon>
                        My Projects
                    </v-btn>

                    <v-btn text>
                        <v-icon>mdi-comment</v-icon>
                        Messages
                    </v-btn>
                    <v-btn text>
                        <v-icon>mdi-bell</v-icon>
                        Notifications
                    </v-btn>

                    <v-btn text href="/freelancer/create">
                        <v-icon>mdi-plus</v-icon>
                        Post a project
                    </v-btn>
                    <v-spacer></v-spacer>

                    <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-x>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn icon text dark v-bind="attrs" v-on="on">
                                <v-icon>mdi-account-circle</v-icon>
                            </v-btn>
                        </template>

                        <v-card>
                            <v-list>
                                <v-list-item>
                                    <v-list-item-avatar>
                                        <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John">
                                    </v-list-item-avatar>

                                    <v-list-item-content>
                                        <v-list-item-title>John Doe</v-list-item-title>
                                        <v-list-item-subtitle>doe@gmail.com</v-list-item-subtitle>
                                    </v-list-item-content>

                                </v-list-item>
                            </v-list>

                            <v-divider></v-divider>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn text @click="menu = false">Close</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-menu>
                </v-app-bar>
                <v-container>
                    @yield('content')
                </v-container>
        </v-main>
        </v-app>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script>
        new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data: () => ({
      fav: true,
      menu: false,
      message: false,
      hints: true,
    }),
    })
    </script>
</body>

</html>
