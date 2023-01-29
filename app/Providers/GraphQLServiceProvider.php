<?php

namespace App\Providers;

use GraphQL\Type\Definition\Type;
use Illuminate\Support\ServiceProvider;
use GraphQL\Type\Definition\ObjectType;
use Nuwave\Lighthouse\Schema\TypeRegistry;

class GraphQLServiceProvider extends ServiceProvider
{
    public function boot(TypeRegistry $typeRegistry): void
    {
        $typeRegistry->register(
             new ObjectType([
                 'name' => 'IndicatorCounts',
                 'fields' => function () use ($typeRegistry): array {
                     return [
                         'footholds' => [
                             'type' => Type::int(),
                         ],
                         'monitored_files' => [
                            'type' => Type::int(),
                        ],
                        'process_detections' => [
                            'type' => Type::int(),
                        ],
                        'ransomware_canaries' => [
                            'type' => Type::int(),
                        ],
                        'ransomware_canaries' => [
                            'type' => Type::int(),
                        ],
                         
                     ];
                 }
             ])
        );
    }
}