<?php


use Phinx\Seed\AbstractSeed;

class MyNewPosts extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */

    /**
    * Migrate Up.
    */
    public function run()
    {
        $data = [
            array(
                'id' => 1,
                'title' => 'This is my first post',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac suscipit erat...',
                'is_published' => '0',
            ),
            array(
                'id' => 2,
                'title' => 'This is my 2nd post',
                'body' => 'Integer pellentesque metus eu dolor ullamcorper, a suscipit orci semper. Duis elementum est augue, vitae cursus odio tempor ut. Donec leo mauris, posuere nec lacus et, tincidunt efficitur velit. Donec varius suscipit tellus, facilisis cursus dui. Phasellus rutrum leo magna, eget laoreet eros blandit a. Maecenas egestas velit quis convallis euismod. Phasellus vestibulum scelerisque vestibulum. Ut facilisis fermentum laoreet. Donec sed venenatis risus. Suspendisse vitae imperdiet tortor, sed interdum libero. Sed consectetur ut lacus vel molestie.',
                'is_published' => '0',
            ),
            array(
                'id' => 3,
                'title' => 'This is my 3rd post',
                'body' => 'Proin sodales felis dui, nec commodo quam mattis et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ut consectetur leo, nec ullamcorper risus. In auctor ultrices dui a iaculis. Pellentesque ligula lectus, congue id tempor facilisis, maximus quis est. In ultricies et massa non congue. Sed nec erat non dui eleifend posuere. Cras eu ullamcorper tellus, a auctor mauris. Donec ut fermentum nisi. Fusce molestie auctor auctor. Etiam orci ligula, rutrum et ex a, suscipit maximus odio. Sed sit amet tempor felis. Donec in leo magna. Nullam ullamcorper magna at tempor posuere.',
                'is_published' => '0',
            ),
            array(
                'id' => 4,
                'title' => 'Is followed by the 4th post',
                'body' => 'Praesent ut arcu id turpis rutrum consectetur ut eget ipsum. Donec tincidunt quam sem, non laoreet urna tincidunt sit amet. Donec ligula augue, lobortis et commodo vitae, viverra eu nulla. Pellentesque tempor sapien ante, non vestibulum nulla placerat et. Morbi sit amet lorem at tellus pellentesque sagittis at sed nisi. Fusce nec finibus odio, eget elementum neque. Phasellus volutpat ornare justo non ultrices.',
                'is_published' => '0',
            ),
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
