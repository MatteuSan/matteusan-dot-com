<div class="container--flex--center">

    <form class="form mdc-elevation--z3" enctype="multipart/form-data">
        @csrf
        <h2 class="title-bar--on-card">INPUT VALUES</h2>

        @foreach($input as $index => $input)

            <div class="container--grid--input">
                <div class="form__field">
                    <label for="possibilities">Enter X value</label>
                    <input aria-label="x" type="number" min="0" placeholder="Enter x" wire:model="input.{{ $index }}.x">
                </div>

                <div class="form__field">
                    <label for="possibilities">Enter freq.</label>
                    <input aria-label="f" type="number" min="0" placeholder="Enter f" wire:model="input.{{ $index }}.f">
                </div>

                <div class="form__field">
                    <div class="container--flex--true-center">
                        <button wire:click.prevent="deleteInput({{ $index }})" class="form__button--delete">Delete</button>
                    </div>
                </div>
            </div>

        @endforeach

        <h5 wire:loading><li class="material-icons" style="display: inline-block; font-size: 16px; position: relative; top: 3px">refresh</li>Loading...</h5>

        <button wire:click.prevent="addInput" class="form__button--no-solid">+ADD INPUT</button>

        <button wire:click.prevent="calculate" type="submit" class="form__button">CALCULATE!</button>

    </form>
</div>

<div class="container--flex --form">
    <div class="card">
        <p><b>TOTAL: </b></p>
        <p><b>COUNT: </b></p>
        <p>Time right now is {{ date('H:i:s') }}</p>
    </div>
    <div class="chart">
        <?php
        $columnChart = new FusionCharts("msline", "mschart", "100%", 400, "chart-container", "json", '{
              "chart": {
                "caption": "Reach of Social Media Platforms among youth",
                "yAxisName": "% of youth on this platform",
                "subcaption": "2012-2016",
                "showHoverEffect": "1",
                "numberSuffix": "%",
                "drawCrossLine": "1",
                "theme": "ocean"
              },
              "categories": [
                {
                  "category": [
                    {
                      "label": "2012"
                    },
                    {
                      "label": "2013"
                    },
                    {
                      "label": "2014"
                    },
                    {
                      "label": "2015"
                    },
                    {
                      "label": "2016"
                    }
                  ]
                }
              ],
              "dataset": [
                {
                  "seriesname": "Facebook",
                  "data": [
                    {
                      "value": null
                    },
                    {
                      "value": null
                    },
                    {
                      "value": "64"
                    },
                    {
                      "value": "66"
                    },
                    {
                      "value": "78"
                    }
                  ]
                },
                {
                  "seriesname": "Twitter",
                  "data": [
                    {
                      "value": "18"
                    },
                    {
                      "value": "19"
                    },
                    {
                      "value": "21"
                    },
                    {
                      "value": "21"
                    },
                    {
                      "value": "24"
                    }
                  ]
                }
              ]
            }');

        $columnChart->render();

        ?>

        <div id="chart-container">

        </div>
    </div>
</div>
