//creas las interfaces generadas con quicktype son dos porque dentro de items hay un apartado de items que es un array
// y tiene el resto, por eso hay que poner .items de 0 o lo que quieras para sacar la información
export interface allPlayers {
    data: Datum[];
    meta: Meta;
    stats:stats[];
}

export interface Datum {
    id:            number;
    first_name:    string;
    height_feet:   number | null;
    height_inches: number | null;
    last_name:     string;
    position:      Position;
    team:          Team;
    weight_pounds: number | null;
}

export enum Position {
    C = "C",
    Empty = "",
    F = "F",
    G = "G",
}

export interface Team {
    id:           number;
    abbreviation: string;
    city:         string;
    conference:   Conference;
    division:     string;
    full_name:    string;
    name:         string;
}

export enum Conference {
    East = "East",
    Empty = "    ",
    West = "West",
}

export interface Meta {
    current_page: number;
    next_page:    number;
    per_page:     number;
}
export interface stats {
    id:       number;
    ast:      number | null;
    blk:      null;
    dreb:     null;
    fg3_pct:  null;
    fg3a:     null;
    fg3m:     null;
    fg_pct:   null;
    fga:      null;
    fgm:      number;
    ft_pct:   number | null;
    fta:      number;
    ftm:      number;
    min:      string;
    oreb:     null;
    pf:       null;
    pts:      number;
    reb:      null;
    stl:      null;
    team:     Team;
    turnover: null;
}
