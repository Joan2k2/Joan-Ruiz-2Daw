//creas las interfaces generadas con quicktype son dos porque dentro de items hay un apartado de items que es un array
// y tiene el resto, por eso hay que poner .items de 0 o lo que quieras para sacar la información
export interface GitHubItems {
    total_count:        number;
    incomplete_results: boolean;
    items:              GithubUserInfo[];
}

export interface GithubUserInfo {
    login:               string;
    id:                  number;
    node_id:             string;
    avatar_url:          string;
    gravatar_id:         string;
    url:                 string;
    html_url:            string;
    followers_url:       string;
    following_url:       string;
    gists_url:           string;
    starred_url:         string;
    subscriptions_url:   string;
    organizations_url:   string;
    repos_url:           string;
    events_url:          string;
    received_events_url: string;
    type:                string;
    site_admin:          boolean;
    score:               number;
  }

  export interface Welcome {
    success: boolean;
    data:    Data;
}

export interface Data {
    memes: Meme[];
}

export interface Meme {
    id:        string;
    name:      string;
    url:       string;
    width:     number;
    height:    number;
    box_count: number;
    captions:  number;
}
  